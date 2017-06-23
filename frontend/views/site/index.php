<?php
use yii\helpers\Html;
?>
<div class="firstSection"></div>

<div class="mainContent">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="leftPanel">

                    <div class="ind_post">
                        <div class="title">
                            <div class="date"><p><span>6</span></p><p> July</p></div>
                            <div class="title_head">
                                <div class="Heading">Contrary to popular belief, Lorem Ipsum is not simply random text</div>
                                <div class="postedBy">
                                    <p>Posted by <span>Alex Boston</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="image_section">
                            <!-- <img src="images/Layer 4.jpg" class="img-responsive" alt=""> -->
                            <?=Html::img('@web/img/Layer 4.jpg', ['class'=>'img-responsive'])?>
                        </div>
                        <div class="Description">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. ...<span>READ MORE</span></p>
                        </div>
                        <div class="response">
                            <ul>
                                <li>
                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                 2014-07-06 | 03:15 pm</li>
                                <li>                                
                                <?=Html::img('@web/img/comment.png', ['class'=>''])?>
                                 215 Comments</li>
                                <li>                                
                                <?=Html::img('@web/img/search.png', ['class'=>''])?>
                                 125 Views</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ind_post">
                        <div class="title">
                            <div class="date"><p><span>4</span></p><p> July</p></div>
                            <div class="title_head">
                                <div class="Heading">Contrary to popular belief, Lorem Ipsum is not simply random text</div>
                                <div class="postedBy">
                                    <p>Posted by <span>Mark Johnson</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="image_section">
                            
                            <?=Html::img('@web/img/Layer 5.jpg', ['class'=>'img-responsive'])?>
                        </div>
                        <div class="Description">
                            <p> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). ...<span>READ MORE</span></p>
                        </div>
                        <div class="response">
                            <ul>
                                <li>
                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                 2014-07-06 | 03:15 pm</li>
                                <li>                                
                                <?=Html::img('@web/img/comment.png', ['class'=>''])?>
                                 215 Comments</li>
                                <li>                                
                                <?=Html::img('@web/img/search.png', ['class'=>''])?>
                                 125 Views</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ind_post">
                        <div class="title">
                            <div class="date"><p><span>4</span></p><p> July</p></div>
                            <div class="title_head">
                                <div class="Heading">Contrary to popular belief, Lorem Ipsum is not simply random text</div>
                                <div class="postedBy">
                                    <p>Posted by <span>Mark Johnson</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="image_section">
                            
                            <?=Html::img('@web/img/Layer 8.png', ['class'=>'img-responsive'])?>
                        </div>
                        <div class="Description">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,  ...<span>READ MORE</span></p>
                        </div>
                        <div class="response">
                            <ul>
                               <li>
                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                 2014-07-06 | 03:15 pm</li>
                                <li>                                
                                <?=Html::img('@web/img/comment.png', ['class'=>''])?>
                                 215 Comments</li>
                                <li>                                
                                <?=Html::img('@web/img/search.png', ['class'=>''])?>
                                 125 Views</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="rightPanel">
                    <div class=" firstRow " style="background-image:url(img/Layer17.jpg)">
                    </div>
                    <div class="searchBar">
                        <input type="text" name="search_input" id="search_input" class="form-control" placeholder="Search Now" >
                    </div>
                    <div class="PostTabs">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home1">Recent Post</a></li>
                          <li><a data-toggle="tab" href="#menu1">Topics</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home1" class="tab-pane fade in active">
                                <div class="allTopics">
                                    <div class="indiVisulaTopic">
                                        <div class="thumb">
                                        </div>
                                        <div class="topicDesc">
                                            <h3>Sed ut perspiciatis unde omnis</h3>
                                            <h4>Posted by <span>Alex Boston</span></h4>
                                            <div class="postTimeDesc">
                                                
                                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                                 2017-06-07 | 03:15 pm
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="indiVisulaTopic">
                                        <div class="thumb" style="background-image:url(img/Layer12.png)">
                                        </div>
                                        <div class="topicDesc">
                                            <h3>Sed ut perspiciatis unde omnis</h3>
                                            <h4>Posted by <span>Alex Boston</span></h4>
                                            <div class="postTimeDesc">
                                                
                                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                                 2017-06-07 | 03:15 pm
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="indiVisulaTopic">
                                        <div class="thumb" style="background-image:url(img/Layer13.png)">
                                        </div>
                                        <div class="topicDesc">
                                            <h3>Sed ut perspiciatis unde omnis</h3>
                                            <h4>Posted by <span>John Boston</span></h4>
                                            <div class="postTimeDesc">
                                                
                                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                                 2017-06-07 | 03:15 pm
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="indiVisulaTopic">
                                        <div class="thumb" style="background-image:url(img/Layer14.png)">
                                        </div>
                                        <div class="topicDesc">
                                            <h3>Sed ut perspiciatis unde omnis</h3>
                                            <h4>Posted by <span>Bill Boston</span></h4>
                                            <div class="postTimeDesc">
                                                
                                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                                 2017-06-07 | 03:15 pm
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="indiVisulaTopic">
                                        <div class="thumb" style="background-image:url(img/Layer15.png)">
                                        </div>
                                        <div class="topicDesc">
                                            <h3>Sed ut perspiciatis unde omnis</h3>
                                            <h4>Posted by <span>John Smith</span></h4>
                                            <div class="postTimeDesc">
                                                
                                                <?=Html::img('@web/img/cloclk.png', ['class'=>''])?>
                                                 2017-06-07 | 03:15 pm
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade ">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="previousPostCounts">
                        <div class="inner_div">
                            <h4>Previous Post</h4>
                            <ul>
                                <li>
                                    <p class="label_P">May 2014</p>
                                    <p class="Count_p"><span>220</span></p>

                                </li>
                                <li>
                                    <p class="label_P">April 2014</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">March 2014</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">Feb 2014</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">Jan 2014</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">Dec 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">Nov 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">Oct 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                    <li>
                                    <p class="label_P">Sep 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">Aug 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">July 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                                <li>
                                    <p class="label_P">June 2013</p>
                                    <p class="Count_p"><span>220</span></p>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="add">
                    <?=Html::img('@web/img/Layer17.jpg', ['class'=>'img-responsive'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>


