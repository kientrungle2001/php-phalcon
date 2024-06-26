<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<title>Login</title>

    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
  crossorigin="anonymous"
/>
<link rel="stylesheet" href="<?= $this->url->getStatic('public/css/style.css') ?>" />
<!-- End layout styles -->

  </head>

  <body>
    
<section class="login d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="login__form d-flex flex-column align-items-center">
        <div class="login__form--title">Login</div>
        <?php if ($this->flashSession->has('success')) { ?>
        <div class="alert alert-success">
          <?= $this->flashSession->output() ?>
        </div>
        <?php } ?> <?php if ($this->flashSession->has('error')) { ?>
        <div class="alert alert-danger">
          <?= $this->flashSession->output() ?>
        </div>
        <?php } ?>
        <form id="form-login" method="post" action="/auth/login">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control"
              id="email1"
              name="email"
              aria-describedby="emailHelp"
              required
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="pass"
              name="pass"
              pattern=".{6,}"
              required
              title="Only letters, numbers, special @,#,_ allowed"
            />
          </div>
          <div class="d-flex flex-column">
            <button type="submit" class="btn btn-dark">Login</button>
            <div style="margin-top: 10px">
              Not have an account?<a href="/signup"> Sign up</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"
></script>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
<script src="<?= $this->url->getStatic('public/js/customer.js') ?>"></script>

  </body>
</html>
