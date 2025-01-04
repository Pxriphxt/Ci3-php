<form action="<?php echo base_url('cars/edit/'.$car['car_id']); ?>" method="post">
    <!-- Font icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/css/themify-icons.css'); ?>">
    <!-- Bootstrap main styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/work1.css'); ?>">
    <div class="container mt-4">
        <h2>Edit Car Information</h2>

        <!-- First Name -->
        <div class="form-group">
            <label for="car_username">First Name</label>
            <input type="text" name="car_username" class="form-control" value="<?php echo set_value('car_username', $car['car_username']); ?>" placeholder="Enter first name" required>
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label for="car_userlname">Last Name</label>
            <input type="text" name="car_userlname" class="form-control" value="<?php echo set_value('car_userlname', $car['car_userlname']); ?>" placeholder="Enter last name" required>
        </div>

        <!-- Brand -->
        <div class="form-group">
            <label for="car_brand">Brand</label>
            <input type="text" name="car_brand" class="form-control" value="<?php echo set_value('car_brand', $car['car_brand']); ?>" placeholder="Enter car brand" required>
        </div>

        <!-- Model -->
        <div class="form-group">
            <label for="car_model">Model</label>
            <input type="text" name="car_model" class="form-control" value="<?php echo set_value('car_model', $car['car_model']); ?>" placeholder="Enter car model" required>
        </div>

        <!-- Registration -->
        <div class="form-group">
            <label for="car_registration">Registration</label>
            <input type="text" name="car_registration" class="form-control" value="<?php echo set_value('car_registration', $car['car_registration']); ?>" placeholder="Enter car registration" required>
        </div>

        <!-- Color -->
        <div class="form-group">
            <label for="car_color">Color</label>
            <input type="text" name="car_color" class="form-control" value="<?php echo set_value('car_color', $car['car_color']); ?>" placeholder="Enter car color" required>
        </div>

        <!-- Submit Button -->
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </div>
    </div>
</form>

<!-- Back to Car List -->
<div class="container mt-4">
    <a href="<?php echo base_url('cars'); ?>" class="btn btn-secondary btn-block">Back to Car List</a>
</div>
