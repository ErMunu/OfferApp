<?php require 'partials/head.php';?>


<div class="container" style="margin-top: 100px">
    <div class="col-12" id="offer">
        <div class="container">
            <div class="container p-3 my-3 border bg-white text-black-50">

                    <table class="table table-hover table-dark" style="text-align: center">
                        <thead class="border-dark">
                        <tr>
                            <th scope="col" colspan="4" ><h1 style="color: #000">View offer # <?= $offer[0] -> id; ?></h1></th>
                        </tr>

                        <tr>
                            <th scope="col" colspan="2" style="text-align: center">
                               Name: <?= $offer[0] -> name; ?>
                            </th>
                            <td scope="col" colspan="2" style="text-align: center">
                                Start Date: <?=  date('Y-m-d', strtotime($offer[0] -> start_date)) ?>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" colspan="2" style="text-align: center">
                                Address: <?= $offer[0] -> address; ?>
                            </td>
                            <td scope="col" colspan="2" style="text-align: center">
                                Offered Date: <?=  date('Y-m-d', strtotime($offer[0] -> offered_date)) ?>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" colspan="2" style="text-align: center">
                                Email: <?= $offer[0] -> email; ?>
                            </td>
                            <td scope="col" colspan="2" style="text-align: center">
                                Amount: <?= $offer[0] -> amount; ?>
                            </td>
                        </tr>

                        </thead>
                        <tbody >
                        <tr><td colspan="4">Remarks</td></tr>
                        <tr>
                            <td colspan="4" style="text-align: center"><?= $offer[0] -> comment; ?></td>
                        </tr>
                        </tbody>

                    </table>
            </div>
        </div>
    </div>
    <div class="row">
        <form class="col-4">
        <button type="button" onclick="printDiv('offer')" class="btn btn-success col-12">Print</button>
        </form>
        <form action="/edit/offer" method="post" class="col-4">
            <button type="submit" value="<?= $offer[0] -> id; ?>" name="id" class="btn btn-info col-12">Update</button>
        </form>
        <form action="/delete/offer" method="post" class="col-4">
            <button type="submit" value="<?= $offer[0] -> id; ?>" name="id" class="btn  btn-danger col-12">Delete</button>
        </form>
    </div>
</div>



<?php require 'partials/footer.php' ?>