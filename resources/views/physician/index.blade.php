@extends('layouts.vertical-menu.master')
@section('css')
<style>
	@media only screen and (max-width: 1280px){
        .page-header{
            width: 959px;
        }
    }
	@media only screen and (max-width: 1180px){
		.page-header {
            padding: 15px;
            width: 870px;
		}
	}
    @media only screen and (max-width: 1024px){
        .page-header {
            padding: 15px;
            width: 700px;
        }
    }

    @media only screen and (max-width: 912px){
        .page-header {
            padding: 15px;
            width: 595px;
        }
    }

    @media only screen and (max-width: 820px){
        .page-header {
           width: 510px;
        }
    }
	@media only screen and (max-width: 768px){
        .page-header {
            width: 460px;
        }
    }
	@media only screen and (max-width: 720px){
        .page-header {
            width: 649px;
        }
        
    }

	@media only screen and (max-width: 540px){
              .avatar {
          right: -8rem;
          background: #5e2dd8 no-repeat 50%/cover;
      }
    }
	@media only screen and (max-width: 480px){
    .dashboard{
       font-size: 20px;
       font-weight: 400;
     }
	 .page-header {
             width:310px;
        }
	}

@media only screen and (max-width: 414px){
	.avatar {
    top: -1.1rem;
    right: -3rem;
    position: absolute;
    }
	.page-header {
    width: 362px;
    }

}
@media only screen and (max-width: 414px){
	.avatar {
    top: -1.4rem;
    right: 0rem;
    position: absolute;
    }
}



@media only screen and (max-width: 375px){
	.avatar {
        top: -1.5rem;
        right: 0rem;
        background: #5e2dd8 no-repeat 50%/cover;
        position: absolute;
    }
}
	@media only screen and (max-width: 360px){
		.avatar {
          position: absolute;
          top: -1.5rem;
          right: 0rem;
          background: #5e2dd8 no-repeat 50%/cover;
      }
	  .dashboard {
          margin-right: 47px;
          font-size: 20px;
      }

	}
	
	@media only screen and (max-width: 280px){
             .page-header {
         width: 242px;
        }
    }
</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">Dashboard</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')

	<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-xl-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Welcome To Dashboard</h5>
										<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="#" class="card-link">Card link</a>
										<a href="#" class="card-link">Another link</a>
									</div>
								</div>
							</div><!-- COL END -->
							
						</div>
						<!-- ROW-1 CLOSED -->					
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
@endsection




