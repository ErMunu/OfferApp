<?php require 'partials/head.php' ?>
<style>
.form-control{
    color: #000!important;
}</style>

<div class="container" style="margin-top: 100px">
        <h1>Edit offers # <?= $offer[0] -> id; ?></h1>
        <form method="post" action="">
            <fieldset>
                <div class="form-group">
                    <label for="name" class="form-label mt-4">Name</label>
                    <input required type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?= $offer[0] -> name; ?>">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label mt-4">Email address</label>
                    <input required type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $offer[0] -> email; ?>">
                </div>

                <div class="form-group">
                    <label for="amount" class="form-label mt-4">Amount</label>
                    <input required type="number" name="amount" class="form-control" id="amount" placeholder="Amount" value="<?= $offer[0] -> amount; ?>">
                </div>

                <div class="form-group">
                    <label for="name" class="form-label mt-4">Address</label>
                    <input required type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address" value="<?= $offer[0] -> address; ?>">
                </div>

                <div class="d-flex col-12">
                    <div class="d-inline-block col-6" style="padding-right: 10px">
                        <label for="name" class="form-label">Start Date</label>
                        <input required type="date" name="startDate" class="form-control" id="date" placeholder="Start Date" value="<?= date('Y-m-d',strtotime($offer[0] -> start_date)); ?>">
                    </div>
                    <div class="d-inline-block col-6" style="padding-left:10px ">
                        <label for="name" class="form-label">Offered Date</label>
                        <input required type="date" name="offeredDate" class="form-control" id="date" placeholder="Offered Date" value="<?= date('Y-m-d',strtotime($offer[0] -> offered_date)); ?>">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Comment</label>
                    <textarea class="form-control" name="comment" id="comment" rows="2"> <?= $offer[0] -> comment; ?></textarea>
                </div>

                <input required type="number" hidden name="id" value="<?= $offer[0] -> id; ?>">


                <div class="d-flex col-12">
                    <div class="d-inline-block col-6" style="padding-right: 10px">
                        <button type="submit" name="updateOffer" class="btn btn-success col-12">Submit</button>
                    </div>
                    <div class="d-inline-block col-6" style="padding-left:10px ">
                        <button type="reset" class="btn btn-danger col-12">Reset</button>
                    </div>
                </div>

            </fieldset>

        </form>
    </div>

<?php require 'partials/footer.php' ?>