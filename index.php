<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <!-- bootstrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <section class="contact_form">
      <div class="container">
        <h2 class=" text-center">Contact Me</h2>
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="contact-img px-5 mt-5">
              <img src="./img/contact.jpg" class="img-fluid" alt="contact">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <form action="connect.php" method="POST" class="w-75">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" name="your_name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address" name="your_email">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="your_message"></textarea>
              </div>
              <input type="submit" name="submit" class="btn btn-outline-success" value="Send ">
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
