

 <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                         @foreach($catswithsubcats as $key => $items)
                          @php
                          $flags = array();
                          $flags = unserialize($items[0]);
                          @endphp
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  @if(count($flags)>0)
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#{{strtolower($key)}}">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            {{$key}}
                                        </a>
                                    </h4>
                                    @else

                                     <h4 class="panel-title"><a href="{{ URL::to('category/'.str_replace(' ', '-', strtolower($key)).'') }}">{{$key}}</a></h4>

                                    @endif
                                </div>
                                <?php //echo $key;?>
                                <?php //echo count($items);?>
                                @if(count($flags)>0)
                                <div id="{{strtolower($key)}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                          @foreach($flags as $item)
                                            <li><a href="{{ URL::to('category/'.str_replace(' ', '-', strtolower($key)).'/'.$item->slug.'') }}">{{$item->name}} </a></li>
                                          @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </div>
                              @endforeach

                        </div>

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">

                                    @foreach($product_brands as $key => $item)

                                    <li><a href="{{ URL::to('brand/'.str_replace(' ', '-', strtolower($key))) }}"> <span class="pull-right">({{$item[0]}})</span>{{$key}}</a></li>

                                    @endforeach


                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>
