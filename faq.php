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
    text-decoration: underline;
    text-transform: uppercase;
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

}
</style>
</head>

<body>
    <main>

        <h2 class="faq-heading" style="text-align:center">Frequently asked questions---</h2>
        <section class="faq-container">
            <div class="faq-one">

               
                <h5 class="faq-page">What is smartzdwell</h5>

                <div class="faq-body">
                <p>At <u><b>Smartzwell</b></u> you will get budget friendly rooms starting from range Rs 1000/- Only with outstanding security. It is safe for girls as well so without any secont thought you can go for Smartzdwell services.</br></br>
        As working professionals, students, bachelors, people who recently moved to a new city, or people who are just looking for their own place, we recognize that finding high-quality housing can be difficult. 
        Using technology and design, <u><b>Smartzdwell</b></u> is the <b>"Managed Dwelling Rental Service"</b> with the quickest growth, striving to offer superior renting options.
             We assist in locating and reserving preferred rental properties in Indian cities.                
</p> </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

               
                <h5 class="faq-page">What makes us different</h5>
                <div class="faq-body">
                    <p>We are here to provide you the most budget friendly PGs or rooms with high security.
                        So you don't have to worry about safety also we are here to address your concerns if you have any.
                    </p></div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                
<h5 class="faq-page">The services you will never forget</h5>
                <div class="faq-body">
                    <p>Our rental properties offer fully furnished, flexible stay options, 
making it effortless to move in or out whenever you choose. Therefore, you can always rely on us to find you a home that fits your budget and lifestyle, whether you are a working professional who travels for work, a newcomer to the city.
</p></div>
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