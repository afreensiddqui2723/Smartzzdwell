<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <style>
    body{
    font-family: 'Work Sans', sans-serif;
}
.faq-heading{
    border-bottom: #777;
    padding: 20px 60px;
}
.faq-container{
display: flex;
justify-content: center;
flex-direction: column;

}
.hr-line{
  width: 80%;
  margin: auto;
  
}

.faq-page {
    
    color: #444;
    cursor: pointer;
    padding: 30px 20px;
    width: 90%;
    border: none;
    outline: none;
    transition: 0.4s;
    margin: auto;

}
.faq-body{
    margin: auto;
    /* text-align: center; */
   width: 80%; 
   padding: auto;
   
}

.active,
.faq-page:hover {
    background-color: #F9F9F9;
}

.faq-body {
    
    background-color: white;
    display: none;
    overflow: hidden;
}

.faq-page:after {
    content: '\02795';
   
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2796";
    
}

@media (min-width: 200px) and (max-width: 700px) {
    .faq-page {
    
    width: 80%;}
    .faq-body{
    margin: auto;
    /* text-align: center; */
   width: 90%; 
   padding: auto;
   
}
body, ul, li, p, a, label, input, div, h1, h2, h3, h4, h5, h6, p, a {
    font-family: 'Playpen Sans', cursive !important;
  }
}
</style>
</head>

<body>
    <main>

        <h1 class="faq-heading" style="text-align:center">Frequently asked questions---</h1>
        <section class="faq-container">
            <div class="faq-one">

               
                <h5 class="faq-page">What is smartzdwell</h5>

                <div class="faq-body">
                    <p>Demo data Demo data Demo dataDemo
                         dataDemo data Demo dataDemo data Demo data Demo dataDemo dataDemo dataDemo data Demo data Demo dat.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

               
                <h5 class="faq-page">What makes us different</h5>
                <div class="faq-body">
                    <p>Demo data Demo data Demo dataDemo dataDemo 
                        data Demo dataDemo data Demo data Demo dataDemo dataDemo dataDemo data Demo data Demo dat.</p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                
<h5 class="faq-page">The services you will never forget</h5>
                <div class="faq-body">
                    <p>Demo data Demo data Demo dataDemo 
                        dataDemo data Demo dataDemo data Demo data Demo dataDemo dataDemo dataDemo data Demo data Demo dat.</p>
                </div>
            </div>

        </section>
    </main>
    <script>
    
var faq = document.getElementsByClassName("faq-page");
var i;

for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}
</script>
</body>


</html>