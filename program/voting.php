<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>

<body>

<!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
        <img class="strips" src="images/strips.png">
    </div>
    <div class="container">
        <div class="header-container header">
            <a class="navbar-brand logo" href="index.php"> <img class="logo" src="images/Voting.png"/> </a>
            <div class="header-right">
                <a class="navbar-item" href="index.php">Beranda</a>
                <a class="navbar-item" href="voting.php">Voting</a>
                <a class="navbar-item" href="hasil.php">Hasil</a>
                <a class="navbar-item" href="#">Admin</a>
            </div>
        </div>
        <!--navigation-->


        <!-- Hero-Section
          ================================================== -->
          <br><br><br>
        <div class="hero row">
            <div class="hero-right col-sm-6 col-sm-6">
                <h1 class="header-headline bold"> Berikan Suaramu Sekarang Demi Kemajuan Desa <br></h1>
                <a href="#">
                    <button class="hero-btn"> Vote</button>
                </a>
            </div><!--hero-left-->

        </div><!--hero-->

    </div> <!--hero-container-->

</div><!--hero-background-->


<!-- Pricing
  ================================================== -->
<div id="pricing" class="pricing-background">

    <h2 class="pricing-section-header light text-center">Pilkades Serentak 1442 H</h2>
    <h4 class=" pricing-section-sub text-center light">Ayo manfaatkan hak suaramu dalam pemilu kali ini!</h4>

    <div class="form-isian">
        <form>
            <div class="form-group">
                <label for="namapemilih-input">Nama Pemilih</label>
                <input type="name" class="form-control" id="namapemilih-input">
                
            </div>
            <div class="form-group">
                <label for="nik-input">Password</label>
                <input type="number" class="form-control" id="nik-input" aria-describedby="nikvalidasi">
                <small id="nikvalidasi" class="form-text text-muted">Pastikan Nama dan NIK sesuai KTP Anda.</small>
            </div>
            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div><!--pricing-background-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>

</body>

</html>