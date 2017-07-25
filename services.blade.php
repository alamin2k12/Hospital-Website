@extends('biotex.servicelayout')
@section('title')
Service
@endsection
@section('content')
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Services</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">	
<div class="row">
			<div class="col-md-12">
				<div><h2>Our Quality Service</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br>
			</div>
		</div>		
        <!-- Service Blcoks -->
        <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">

               {!!Html::image('biotex/img/service1.jpg','alt text',array('class'=>'img-responsive'))!!} 
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        
            </div>
            <div class="col-md-4">
                
                {!!Html::image('biotex/img/service2.jpg','alt text',array('class'=>'img-responsive'))!!}           
                <h3>Mobile Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        
            </div>
            <div class="col-md-4 md-margin-bottom-40">
              
              {!!Html::image('biotex/img/service3.jpg','alt text',array('class'=>'img-responsive'))!!}
                <h3>Responsive Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        
            </div>
        </div>
        <!-- End Service Blcoks -->

        <hr class="margin-bottom-50">

        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-book"></i>
                <div class="info-blocks-in">
                    <h3>Awesome Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-user"></i>
                <div class="info-blocks-in">
                    <h3>FontAwesome</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-heart"></i>
                <div class="info-blocks-in">
                    <h3>Bootstrap</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->

       
        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-file"></i>
                <div class="info-blocks-in">
                    <h3>SEO Ready</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-flag"></i>
                <div class="info-blocks-in">
                    <h3>Fully Responsive</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-thumbs-up"></i>
                <div class="info-blocks-in">
                    <h3>CSS3 + HTML5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->

        
    </div>
    </section>
