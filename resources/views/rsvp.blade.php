<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center" style="background-color: #e0eef4 !important;">
              <h3 style="color: #005688;">Reserve your spot here</h3>
            </div>
            <div class="card-body">
              <form>
                <!-- Salutation -->
                <div class="form-group">
                  <label for="salutation">Salutation</label>
                  <select class="form-control" id="salutation">
                    <option>Mr</option>
                    <option>Ms</option>
                  </select>
                </div>
                <!-- First Name -->
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    placeholder="Enter first name"
                  />
                </div>
                <!-- Last Name -->
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    placeholder="Enter last name"
                  />
                </div>
                <!-- Company Name -->
                <div class="form-group">
                  <label for="companyName">Company Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="companyName"
                    placeholder="Enter company name"
                  />
                </div>
                <!-- Title -->
                <div class="form-group">
                  <label for="title"> Job Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="title"
                    placeholder="Enter job title"
                  />
                </div>
                <!-- Phone Number -->
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input
                    type="number"
                    class="form-control"
                    id="phoneNumber"
                    placeholder="Enter phone number"
                    pattern="[0-9]+"
                    title="Please enter a valid phone number"
                  />
                </div>
                <!-- Email -->
                <div class="form-group">
                  <label for="email"
                    >Email <span style="color: red">*</span>
                  </label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    required
                    placeholder="Make sure the email address is correct"
                  />
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-block" style="background-color: #005386; color: white;">
                  Reserve
                </button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
