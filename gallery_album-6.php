<?php
    require './header_1.php';
?>

<br/>
<br/>
<br/>
<br/>
<style>
    .modal-dialog {width:600px;}
    .thumbnail {margin-bottom:6px;}
</style>
<script>
    $(document).ready(function () {
        $('.thumbnail').click(function () {
            $('.modal-body').empty();
            var title = $(this).parent('a').attr("title");
            $('.modal-title').html(title);
            $($(this).parents('div').html()).appendTo('.modal-body');
            $('#myModal').modal({show: true});
        });
    });
</script>
<h1 style="padding: 6%; font-weight: bolder;">Warm Cloth Distribution Program - 2012</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/1.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/2.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/3.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/4.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/5.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/6.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/7.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/8.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/9.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/10.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/11.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/12.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/13.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/14.jpg"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image" href="#"><img class="thumbnail img-responsive" src="images/gallery/warm_cloth_distribution_program_2012/15.jpg"></a></div>
        <hr>
        <hr>
    </div>
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title">Heading</h3>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
require './footer.php';
?>