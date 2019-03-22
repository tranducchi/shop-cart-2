@extends('../master')
@section('title', 'View article')
@section('content')
    <div class="container mb-3 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-white"><i class="fa fa-eye pr-2"></i>View product</div>
              
                    <form method="post" action="#"> 
                        <div class="row">
                            <div class="col-sm-6 mt-3 mb-3">
                                <div class="card m-2">
                                    <div class="image p-2"> 
                                        <img src="/img/3.jpg" class="img-fluid" alt="">
                                    </div>
                                   
                                    <div class="form-group form-inline">
                                        <label for="" class="p-2">Selection Quantity : </label>
                                        <input type="number" min="1" max="100" class="form-control form-control-sm text-center" value="1">
                                    </div>
                                    <p class="pl-2">Price 3 $</p>
                                    <p class="pl-2">All product : 10 $ </p>
                                    <div class="form-group text-center">
                                        <button class="btn btn-warning"><i class="fa fa-shopping-cart pr-2"></i>Add to Cart</button>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-sm-6">
                                <h3 class="text-center mt-2">Info about Product</h3>
                                <hr>
                                <p>Why do we use it?
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a</p>
                            </div>
                        </div>
                    </form>
                      {{-- Recent Post --}}
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h3>Recent Post</h3>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <hr>
                    </div>
                </div>
                <div class="row m-3">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="image p-2">
                                    <img class="card-img-top img-fluid" src="/img/2.jpg" alt="Card image cap">
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p>Price : 50 $</p>
                                    <div class="row d-flex justify-content-between">
                                            <a href="#" class="btn btn-info ml-4"><i class="fa fa-eye pr-2"></i>View</a>
                                            <a href="#" class="btn btn-warning mr-4 "><i class="fa fa-shopping-cart pr-2"></i>Buy Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        {{-- End col sm -4 --}}
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="image p-2">
                                    <img class="card-img-top img-fluid" src="/img/2.jpg" alt="Card image cap">
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p>Price : 50 $</p>
                                    <div class="row d-flex justify-content-between">
                                            <a href="#" class="btn btn-info ml-4"><i class="fa fa-eye pr-2"></i>View</a>
                                            <a href="#" class="btn btn-warning mr-4 "><i class="fa fa-shopping-cart pr-2"></i>Buy Now</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        {{-- End col sm -4 --}}
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="image p-2">
                                    <img class="card-img-top img-fluid" src="/img/2.jpg" alt="Card image cap">
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p>Price : 50 $</p>
                                    <div class="row d-flex justify-content-between">
                                            <a href="#" class="btn btn-info ml-4"><i class="fa fa-eye pr-2"></i>View</a>
                                            <a href="#" class="btn btn-warning mr-4 "><i class="fa fa-shopping-cart pr-2"></i>Buy Now</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        {{-- End col sm -4 --}}
                    </div>
                    <div class="row mt-3">
                      
                            <div class="col-sm-12">
                                <div class="card m-3">
                                    <h3 class="mb-3 card-header"><i class="fa fa-comment ml-3 pt-3"></i>Comment : </h3>
                                    <div class="comment pl-3">
                                            <div class="form-goup">
                                                <label for=""><i class="fa fa-user"></i>Chi Tran</label>
                                                <p class="ml-2"><i class="fa fa-reply" aria-hidden="true"></i>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                </p>
                                                <div class="col-sm-10 offset-sm-1">
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-goup">
                                                <label for=""><i class="fa fa-user"></i>Chi Tran</label>
                                                <p class="ml-2"><i class="fa fa-reply" aria-hidden="true"></i>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                </p>
                                                <div class="col-sm-10 offset-sm-1">
                                                    <hr>
                                                </div>
                                            </div>
                                    </div>
                                    {{-- End list comment --}}
                                    {{-- Post Comment --}}
                                    <div class="post-comment p-2">
                                        <p class="pl-2">Post idea : </p>
                                        <form action="" method="post">
                                            <textarea name="" id="" class="form-control" cols="20" placeholder="Post comment ..." rows="6"></textarea>
                                            <div class="form-group mt-2 text-right">
                                                <button type="submit" class="btn btn-primary">Post comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      
                       
                    </div>
                </div>
    </div>
     
@stop