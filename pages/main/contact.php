<style>
body {
    margin: 0;
    padding: 0;
    background-color: #000;
    border-radius: 0;
}

#contact {
    width: 100%;
    height: 100%;
    margin: auto;
}

#contact-form {
    margin: 20px auto;
    margin-top: 0;
}

.section-header {
    text-align: center;
    margin: 0 auto;
    padding: 40px 0;
    font: 300 55px 'Oswald', sans-serif;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 6px;
    padding-bottom: 10px;
}

.contact-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 0 auto;
    padding: 20px;
    position: relative;
    max-width: 840px;
}

.form-horizontal {
    max-width: 400px;
    font-family: 'Lato';
    font-weight: 400;
}

.form-group {
    display: inline-block;
    width: 47%;
}

.form-group .form-gmail {
    margin-left: 19px;
    width: 188px;
}

.form-group .form-control {
    border-color: rgb(171, 79, 19);
}

.form-ms .form-control {
    border-color: rgb(171, 79, 19);
}

.form-control {
    border-radius: 0 !important;
}

.form-control,
textarea {
    max-width: 400px;
    background-color: #000;
    color: #fff;
    letter-spacing: 1px;
}

.send-button {
    margin-top: 15px;
    height: 34px;
    margin-left: 63%;
    width: 150px;
    overflow: hidden;
    transition: all .2s ease-in-out;
    background-color: rgb(171, 79, 19);
    color: white;
    border: 1px solid rgb(171, 79, 19);
}

.send-button:hover {
    background-color: #bbb;
    border-color: #bbb;
    color: rgb(171, 79, 19);
    cursor: pointer;
}

.send-text {
    display: block;
    font: 700 12px 'Lato', sans-serif;
    letter-spacing: 2px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section id="contact">

    <h1 class="section-header" style="color: rgb(171, 79, 19)">Liên hệ</h1>

    <!-- <div class="contact-wrapper"> -->

    <!-- Left contact page -->

    <form id="contact-form" class="form-horizontal" role="form">

        <div class="form-group">
            <div class="form-name" style="padding: 0;">
                <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
            </div>
        </div>

        <div class="form-group">
            <div class="form-gmail" style="padding: 0;">
                <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
            </div>
        </div>
        <div class="form-ms" style="margin-bottom: 0;">
            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
        </div>


        <button class="send-button" id="submit" type="submit" value="SEND">
            <span class="send-text">SEND</span>
        </button>

    </form>
</section>