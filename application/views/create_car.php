<form action="<?php echo base_url('cars/create'); ?>" method="post">
    <!-- Font icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/css/themify-icons.css'); ?>">
    <!-- Bootstrap main styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/work1.css'); ?>">
    <div class="container mt-4">
        <h2>Create New Car</h2>

        <!-- First Name -->
        <div class="form-group">
            <label for="car_username">First Name</label>
            <input type="text" name="car_username" class="form-control" value="<?php echo set_value('car_username'); ?>" placeholder="Enter first name" required>
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label for="car_userlname">Last Name</label>
            <input type="text" name="car_userlname" class="form-control" value="<?php echo set_value('car_userlname'); ?>" placeholder="Enter last name" required>
        </div>

        <!-- Brand -->
        <div class="form-group">
            <label for="car_brand">Brand</label>
            <input type="text" name="car_brand" class="form-control" value="<?php echo set_value('car_brand'); ?>" placeholder="Enter car brand" required>
        </div>

        <!-- Model -->
        <div class="form-group">
            <label for="car_model">Model</label>
            <input type="text" name="car_model" class="form-control" value="<?php echo set_value('car_model'); ?>" placeholder="Enter car model" required>
        </div>

        <!-- Registration -->
        <div class="form-group">
            <label for="car_registration">Registration</label>
            <input type="text" name="car_registration" class="form-control" value="<?php echo set_value('car_registration'); ?>" placeholder="Enter car registration" required>
        </div>

        <!-- Color -->
        <div class="form-group">
            <label for="car_color">Color</label>
            <input type="text" name="car_color" class="form-control" value="<?php echo set_value('car_color'); ?>" placeholder="Enter car color" required>
        </div>

        <!-- Buttons -->
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
            <a href="<?php echo base_url(''); ?>" class="btn btn-secondary btn-block mt-2">Back to Home</a>
        </div>
    </div>
</form>
