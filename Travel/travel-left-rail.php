         <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>          
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->       
      
         <div class="panel panel-info">
           <div class="panel-heading">Continents</div>
           <ul class="list-group">               
<!--               <li class="list-group-item"><a href="#">South America</a></li> -->
<!--               <li class="list-group-item"><a href="#">Africa</a></li> -->
<!--               <li class="list-group-item"><a href="#">Europe</a></li> -->
<!--               <li class="list-group-item"><a href="#">North America</a></li> -->
<!--               <li class="list-group-item"><a href="#">Asia</a></li>    -->
<!--               <li class="list-group-item"><a href="#">Oceania</a></li>    -->
					<?php 
					$images = include 'travel-data.php';
					foreach($continents as $key => $elements){
					    echo "<li class='list-group-item'><a href='#'>$elements</a></li>";
					}
					
					?>
           </ul>
         </div>  <!-- end continents panel -->  
         <div class="panel panel-info">
           <div class="panel-heading">Countries</div>
           <ul class="list-group">               
<!--               <li class="list-group-item"><a href="#">United Kingdom</a></li> -->
<!--               <li class="list-group-item"><a href="#">Canada</a></li> -->
<!--               <li class="list-group-item"><a href="#">United States</a></li>               -->
<!--               <li class="list-group-item"><a href="#">Greece</a></li> -->
<!--               <li class="list-group-item"><a href="#">Hungary</a></li> -->
<!--               <li class="list-group-item"><a href="#">Italy</a></li> -->
<!--               <li class="list-group-item"><a href="#">Spain</a></li>               -->
<!--               <li class="list-group-item"><a href="#">Germany</a></li>     -->

					<?php 
					$images = include 'travel-data.php';
					foreach($countries as $key => $elements){
					    if ($elements == 'Canada'){
    					    echo "<li class='list-group-item'><a href='../Canada.php'>$elements</a></li>";					        
					    }else{
					        echo "<li class='list-group-item'><a href='../Underconstruction.php'>$elements</a></li>";
					    }
					}
					
					?>
           </ul>
         </div>  <!-- end countries panel -->
             