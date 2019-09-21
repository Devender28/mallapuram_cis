<style>
<!--
- RATING
-->
 .rating {
 float:left;
}



/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 

   follow these rules. Every browser that supports :checked also supports :not(), so

   it doesn’t make the test unnecessarily selective */

.rating:not(:checked) > input {
 position:absolute;
 top:-9999px;
 clip:rect(0,0,0,0);
}
 .rating:not(:checked) > label {
 float:right;
 /*width:1em;*/
 width:27px;
 padding:0 .1em;
 overflow:hidden;
 white-space:nowrap;
 cursor:pointer;
 font-size:200%;
 line-height:1.2;
 color: #666666;
 text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0, 0, 0, .5);
}
 .rating:not(:checked) > label:before {
 content: '\2605';
display: inline-block;
/*content: '★';*/
}
 .rating > input:checked ~ label {
 color: #f70;
 text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0, 0, 0, .5);
}
 .rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
 color: gold;
 text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0, 0, 0, .5);
}
 .rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
 color: #ea0;
 text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0, 0, 0, .5);
}
.rating > label:active {
	position:relative;
	top:2px;
	left:2px;
}
</style>

  <!-- Header Navigation Left -->
  <!-- Main Container -->
  <main id="main-container">
    <!-- Page Header -->
    <div class="content bg-gray-lighter3">
      <div class="row items-push">
        <div class="col-sm-10">
          <h1 class="page-heading"> Feedback </h1>
        </div>
        <!--<div class="col-md-2">

                        <div class="col-xs-12">

                        <a href="endorsement_request_list.php">  <button class= "btn btn-minw btn-danger" type="button">View</button></a>

                           </div>

                           </div>-->
      </div>
    </div>
    <!-- END Page Header -->
    <!-- Page Content -->
    <div class="content content-narrow">
      <div class="row">
        <div class="col-md-12">
          <!-- Default Elements -->
          <div class="block">
            <div class="block-content block-content-narrow">
              <form class="js-validation-bootstrap form-horizontal" action="" method="post" >
                <br> <?php echo @$msg;?>
                <div class="col-md-12">
                  <div class="row">
                    <p>1. Are you satisfied with us ?</p>
                    <p>2. Are you satisfied with us ?</p>
                    <p>3. Are you satisfied with us ?</p>
                  </div>
                  <div class="form-group"> <br>
                    <br>
                   
                    <div class="col-md-8" style="padding:0px;"> <br />
                      <label class="col-xs-12">Remarks</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" cols="8" type="text"  name="remark"></textarea>
                      </div>
                    </div>
                    <div class="col-md-8" style="padding:0px;"> <br>
                      <label class="col-xs-12">Suggestion</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" cols="8" type="text"  name="suggestion"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group"> <br>
                    <br>
                    <div class="col-md-12">
                      <fieldset class="rating" style="float:left">
                        <legend>Please rate:</legend>
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="Rocks!">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="Pretty good">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="Meh">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="Kinda bad">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="Sucks big time">1 star</label>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6" style="margin-left:15px;"> 
                    <input type="submit" name="feedback_submit" class="btn btn-minw btn-danger" value="Feedback">
                     </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Page Content -->
  </main>
  
