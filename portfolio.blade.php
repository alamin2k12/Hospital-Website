@extends('biotex.portfoliolayout')
@section('title')
Portfolio
@endsection
@section('content')
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Portfolio</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
			<div class="row">
			<div class="col-md-12">
				<div><h2>Our Portfolio Glance</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
				<br>
			</div>
		</div>
			  <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

			<div class="editContent">
	            <ul class="filter">
	                <li class="active"><a href="#" data-filter="*">All</a></li>
	                <li><a href="#" data-filter=".artwork">Artwork</a></li>
	                <li><a href="#" data-filter=".creative">Creative</a></li>
	                <li><a href="#" data-filter=".nature">Nature</a></li>
	                <li><a href="#" data-filter=".outside">Outside</a></li>
	                <li><a href="#" data-filter=".photography">Photography</a></li>
	            </ul>
			</div>
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                
                                {!!Html::image('biotex/img/works/1.jpg','alt text',array('class'=>'img-responsive'))!!}
                                <div class="image-overlay"></div>
                                <a href="img/works/1.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>1st gallery Item</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                
                                {!!Html::image('biotex/img/works/2.jpg','alt text',array('class'=>'img-responsive'))!!}
                                <div class="image-overlay"></div>
                                <a href="img/works/2.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>2nd gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                
                                {!!Html::image('biotex/img/works/3.jpg','alt text',array('class'=>'img-responsive'))!!}
                                <div class="image-overlay"></div>
                                <a href="img/works/3.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>3rd gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper creative nature">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                
                                {!!Html::image('biotex/img/works/4.jpg','alt text',array('class'=>'img-responsive'))!!}
                                <div class="image-overlay"></div>
                                <a href="img/works/4.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>4th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                
                                {!!Html::image('biotex/img/works/5.jpg','alt text',array('class'=>'img-responsive'))!!}
                                <div class="image-overlay"></div>
                                <a href="img/works/5.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>5th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                
                                {!!Html::image('biotex/img/works/6.jpg','alt text',array('class'=>'img-responsive'))!!}
                                <div class="image-overlay"></div>
                                <a href="img/works/6.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>6th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->  
	</div>
	</section>
	