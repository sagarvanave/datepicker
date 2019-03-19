<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" href="css/common.css"  >
    <link rel="stylesheet" href="//kendo.cdn.telerik.com/2016.2.714/styles/kendo.material.min.css">
<!--    <link rel="stylesheet" href="css/mobilemin.css">-->
    <script src="js/jquerymin.js"></script>
    <script src="js/allminjs.js"></script>
</head>
<body>
 
        
          
              <input id="datepicker" placeholder="From"/>
            
        <script>
        var fd = $("#datepicker").kendoDatePicker({parseFormats:["dd/MM/yyyy"],
        format: "dd/MM/yyyy"
        }).data("kendoDatePicker");
        var value = fd.value();
        </script>
        

</body>
</html>
