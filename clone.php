<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>list</title>
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
</head>

<body>
    <link href='dragula.min.css' rel='stylesheet' type='text/css' />
    <link href='example.css' rel='stylesheet' type='text/css' />

    <style type="text/css">:root{background-color: #fff;}</style>


 
    <div class='parent'>
        <label for='hy'>Drag and drop your courses into the right container</label>
        <div class='wrapper'>
            <div id='left-events' class='container'>
                <div>Programming I - C++</div>
                <div>Programming II - JAVA</div>
                <div>Introduction to Web Technologies</div>
                <div>Advanced Web Technologies</div>
                <div>Node.js</div>
                <div>Angular js</div>
                <div>Bootstrap</div>
                <div>Ajax</div>
                <div>JavaScript</div>
                <div>Php</div>
                <div>Django</div>
            </div>
            <div id='right-events' class='container'>

            <!-- will appear here -->
            </div>
        </div>  <!-- end wrapper -->
        <button class="done" style="padding: .5em; border-radius: 5px; background-color: #fff; width: 180px; color: #000; font-family: cursive; font-size: 18px; margin-left: .3em; margin-top: 1em;">submit</button>

    </div> <!-- end parent -->


    <script type="text/javascript">

    	
    	var courses = [];
    	var link = "";

    	$("#left-events div").mouseenter(function(){
    		$('.parent h2').remove();
			$('.parent p').remove();
			//fix this mouse over event is not the best
    	});

    	$(".done").on("click", function(){

    		var totalCourses = $("#right-events").children().length;
    		var $courses = $("#right-events").children();

    		$courses.each(function () {
			    // alert(this.value); // "this" is the current element in the loop
			    courses.push($(this).text())
			});

			for (var i = 0; i < courses.length; i++) {
				if( i < (courses.length - 1) ){
					link += "courses[" + i + "]=" + courses[i] + "&";
					
				}else{
					link += "courses[" + i + "]=" + courses[i];
				}
			}	
			
			if( link.length > 0){
				window.location.href = "form-processing.php?" + link;
				// console.log("form-processing.php?" + link);
			}else{
				$(".parent").append("<h2> No course selected </h2><p>Add a course and try again!</p>").show();
				$('.parent h2').css("color", "white");
				$('.parent p').css("color", "blue");	
			}	
			
		});
	
    </script>

     <script src='dragula.min.js'></script>
    <script src='example.min.js'></script>
</body>

</html>
