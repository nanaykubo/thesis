<!DOCTYPE HTML>
<html>
<head>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
</head>
<script>
  $(document).ready(function(){  
  $(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
    
    // Let's test it out
    alert($text);
});
});
</script>
<body>
 <table id="choose-address-table" class="ui-widget ui-widget-content">
    <thead>
        <tr class="ui-widget-header ">
            <th>Name/Nr.</th>
            <th>Street</th>
            <th>Town</th>
            <th>Postcode</th>
            <th>Country</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="nr"><span>50</span>
            </td>
            <td>Some Street 1</td>
            <td>Glasgow</td>
            <td>G0 0XX</td>
            <td>United Kingdom</td>
            <td>
                <button type="button" class="use-address" />
            </td>
        </tr>
        <tr>
            <td class="nr">49</td>
            <td>Some Street 2</td>
            <td>Glasgow</td>
            <td>G0 0XX</td>
            <td>United Kingdom</td>
            <td>
                <button type="button" class="use-address" />
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>