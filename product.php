<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="card">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            &nbsp;
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form method="post" action="config.php" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label for="name">Product Name </label>
                    <input id="name" name="name" type="text" />

                  </div>&nbsp;
                  <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea rows="3" id="description" name="description"></textarea>
                  </div>
                  &nbsp;
                  <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select id="category" name="category" type="int">
                      <option selected="">Select category</option>
                      <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option>
                    </select>
                  </div>

              </div>
              &nbsp;

              <div class="app-form-group button">
                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>

              </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>