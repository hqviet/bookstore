<?php
/**
 * Created by PhpStorm.
 * User: quocviet
 * Date: 4/23/18
 * Time: 4:00 PM
 */
include "./header.php";

?>
<div class="container mt-3">
    <div class="row">
        <div class="col mt-2 mb-2">
            <h4>Your information</h4>
        </div>
    </div>
    <div class="row">
        <div class="col mt-2 mb-2">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="profileEmail" readonly value="<?= $_SESSION['sessionEmail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="profileUsername" value="<?= $_SESSION['sessionUsername'] ?>">
            </div>
            <div class="form-group">
                <label for="">Phone number</label>
                <input type="text" class="form-control" name="profilePhone" value="<?= $_SESSION['sessionPhone'] ?>">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="profileAddress" value="<?= $_SESSION['sessionAddress'] ?>">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success form-control" value="Save changes" name="changeSubmit">
            </div>
            <div class="form-group">
                <button class="btn bg-danger text-white form-control" data-toggle="modal" data-target="#profileModal">Change my password</button>
                <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Current password</label>
                                    <input type="password" class="form-control" name="oldPassword">
                                </div>
                                <div class="form-group">
                                    <label for="">New password</label>
                                    <input type="password" class="form-control" name="oldPassword">
                                </div>
                                <div class="form-group">
                                    <label for="">Re-enter new password</label>
                                    <input type="password" class="form-control" name="oldPassword">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col"></div>
    </div>
</div>

