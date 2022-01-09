<?php

session_start();
$user = $_SESSION['lf-user'];
$user_id = $user->id;
$name = $user->name;
$phone = $user->phone;
$address = $user->address;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting Found Item</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <a href="home.php">
            <--- go home</a>
                <h1 class="text-center mb-3 pb-2 border-bottom">Reporting Found Item</h1>
                <?php if (isset($_GET['error']) && ($_GET['error'] === true)) : ?>
                    <p class="alert alert-danger text-muted">(<span style="color: red;">*</span>) ပြထားသော အကွက်များ မဖြစ်မနေဖြည့်ရန်လိုအပ်ပါသည်။</p>
                <?php elseif (isset($_GET['error']) && $_GET['error'] === "image") : ?>
                    <p class="alert alert-danger text-muted">Invaild or Error Photo! </p>
                <?php elseif (isset($_GET['error']) && $_GET['error'] === "invaild") : ?>
                    <p class="alert alert-danger text-muted">Something Worng! </p>
                <?php endif; ?>
                <form action="_actions/create_found_item.php" enctype="multipart/form-data" method="POST">
                    <div class="row g-5">
                        <div class="col-12 col-md-6">
                            <h3 class="mb-1 mt-2">Item Info</h3>
                            <h6 class="text-muted mb-3">ကောက်ရသောပစ္စည်း၏ အချက်အလက်များကို ပြည့်စုံစွာဖြည့်စွက်ပေးပါ</h6>
                            <div class="mb-3">
                                <label class="mb-1" for="">Enter Item Name <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="item_name">
                                <small class="form-text text-muted">အမှတ်အသားတခုခု(သို့)အရောင်နှင့် ပစ္စည်းအမျိုးအစားကိုဖော်ပြပေးပါ။</small><br>
                                <small class="form-text text-muted">eg. ပန်းရောင် ပိုက်ဆံအိတ်၊ မှတ်ပုံတင် ၁၂/xxx(နိုင်)xxxxxx</small>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Description <span style="color: red;">*</span></label>
                                <textarea class="form-control" type="text" name="description"></textarea>
                                <small class="form-text text-muted">အရေးကြီးသောအချက်အလက်များမှလွဲ၍ သိသာမြင်သာစေသောအချက်များ ရှာတွေ့ပုံများကိုဖော်ပြပေးပါ</small>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Found on <span style="color: red;">*</span></label> <br>
                                <select class="w-25 rounded-3" name="found_on" id="">
                                    <option selected>Choose....</option>
                                    <option value="bus/taxi">Bus / Taxi</option>
                                    <option value="road">Road</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Bus No. or Taxi No.</label>
                                <input class="form-control" type="text" name="bus_taxi_no">
                                <small class="form-text text-muted">အကယ်၍ Bus / Taxi ရွေးခဲ့ရင် ထိုနေရာ၌ဖြည့်စွတ်ပေးပါ</small>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Place (Street Name / Township / city)</label>
                                <input class="form-control" type="text" name="place">
                                <small class="form-text text-muted">အကယ်၍ Road ရွေးခဲ့ရင် ထိုနေရာ၌ဖြည့်စွတ်ပေးပါ (ပစ္စည်းကောက်ရသည့်နေရာ)</small>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Found at <span style="color: red;">*</span></label>
                                <input class="form-control w-75" type="Date" name="date">
                                <!-- <small class="form-text text-muted"></small> -->
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Photos <span style="color: red;">*</span></label>
                                <input class="form-control w-75" type="file" name="image[]" accept="image/*" multiple>
                                <small class="form-text text-muted">အရေးကြီးသောအချက်များကို ဖုံးအုပ်၍သော်လည်းကောင်း Blur လုပ်၍သော်လည်းကောင်း ပုံထည့်ပေးပါ</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 shadow">
                            <h3 class="mb-1 mt-2">Your Contact Info</h3>
                            <h6 class="text-muted mb-3" style="line-height: 28px;">ပစ္စည်းပျောက်ဆုံးသူမှ သင့်အား ဆက်သွယ်နိုင်ရန် အချက်အလက်များကို ပြည့်စုံအောင်ဖော်ပြပေးပါ</h6>
                            <div>
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Enter Your Name <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="name" value="<?= $name ?>">
                                <!-- <small class="form-text text-muted">အကယ်၍ Road ရွေးခဲ့ရင် ထိုနေရာ၌ဖြည့်စွတ်ပေးပါ</small> -->
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Enter Your Phone Number <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="phone" value="<?= $phone ?>">
                                <!-- <small class="form-text text-muted">အကယ်၍ Road ရွေးခဲ့ရင် ထိုနေရာ၌ဖြည့်စွတ်ပေးပါ</small> -->
                            </div>
                            <div class="mb-3">
                                <label class="mb-1" for="">Enter Your address <span style="color: red;">*</span></label>
                                <input class="form-control" type="text" name="address" value="<?= $address ?>">
                                <small class="form-text text-muted">ပစ္စည်းလာယူရမည့် လိပ်စာကိုဖြည့်စွတ်ပေးပါ</small>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" name="create_found">Save</button>
                </form>
    </div>

</body>

</html>