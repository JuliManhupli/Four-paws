<div class="container">
    <section class="navigation">
        <div><a href="?page=landing">Головна</a></div>
        <div>/</div>
        <div><a href="?page=pets">Пошук улюбленця</a></div>
        <div>/</div>
        <div><a href="#">Булочка</a></div>
    </section>
</div>

<div class="container">
    <section class="all_description_pet">
        <div class="row">

        <div class="col-lg-6">
            <div class="pet_photo">
                <img src="pictures/pets/Bulochka.png">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="description_pet">
                <h1>Булочка</h1>
                <div class="short_description_pet">
                    <blockquote>Без породи</blockquote>
                    <img src="pictures/Ellipse.svg">

                    <blockquote>Дівчинка</blockquote>
                    <img src="pictures/Ellipse.svg">


                    <blockquote>3 роки</blockquote>
                    <img src="pictures/Ellipse.svg">
                </div>

                <div class="description_pet_text">
                    <blockquote>
                        Собака на ім'я Булочка!<br><br>
                        Її було врятовано та забрано з вулиці. Собака має м'який характер, дуже любить грати з дітьми, цікавиться всім навкруги.
                        Собачка має всі щеплення.<br><br>
                        Вона очікує свого хазяїна, якому подарує всю свою любов та буде вірним другом!
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 col-12">
                <button onclick="show('block')">Прихистити тварину</button>

            </div>

        </div>
    </section>
</div>

<div onclick="show('none')" id="gray" class="gray_background"></div>

<?php require 'block/footer.php' ?>
<?php
$name = "";
$email = "";
$phone = "";

if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["phone"])){
    $phone = $_POST["phone"];
}

echo "Ім'я ".$name;
echo "<br>Email ".$email;
echo "<br>Телефон ".$phone;
?>

<div id="win" class="window">
    <section class="form">
        <h2>Хочу прихистити</h2>
        <form action="?page=page" name="f" method="POST">
            <label>
                <input type="text" placeholder="Ім'я" name="name" class="input">
            </label>
            <label>
                <input type="email" placeholder="Email" name="email" class="input">
            </label>
            <label>
                <input type="text" placeholder="Телефон" name="phone" class="input">
            </label>
            <input type="submit" value="Відправити" name="sab" class="button_reg">
        </form>
    </section>
</div>

<script>
    function show(state) {
        document.getElementById('win').style.display = state;
        document.getElementById('gray').style.display = state;
    }
</script>
