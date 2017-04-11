if (!window.console) console = {log: function() {}};
console.log('Start of the script')
document.getElementById('project_large').style.display = 'none';
document.getElementById('project_container').style.display = 'none';
document.getElementById('giftwrap_box_view').style.display = 'none';
document.getElementById('box_overlay').style.display = 'none';
document.getElementById('wall_overlay').style.display = 'none';
document.getElementById('roomview_wallpaper').style.display = "none";
if (document.getElementById('roomview_wallpaper').style.display == 'block' )
{
  if (document.getElementById('change_design_button').src != 'http://www.spoonflower.com/assets/View_ON.png')
  {
    document.getElementById('wall_overlay').style.display = 'block';
  }
}
if (document.getElementById('design_preview').style.display == 'inline'){
  document.getElementById('canvas_div').style.display = 'block';
} else {
  document.getElementById('loading').style.display = 'block';
}



var yards = 0;

function onKeyUpChangeTotal()
{
  var total = document.getElementById("total")
  var discount_message = document.getElementById("discount")
  var yards = document.getElementById('dynamic_fabric_count').value
  var price;
  var size;
  var fabricId;
  var discount = false;
  $("input[name*=fabric_id]").each(function (index, element) {
    if (element.checked) {
      fabricId = element.value;
    }
  });
  $("input[name*=fabric_size_id]").each(function (index, element) {
    if (element.checked) {
      price_name = "fabric_price_" + element.value + "_" + fabricId
      size_name = "fabric_size_" + element.value + "_" + fabricId
      //alert("childnodes 1")
      price = document.getElementById(price_name).childNodes[0].data
      size = document.getElementById(size_name).childNodes[0].data
      if (element.value == '0'){
        discount = true;
        $("input[name*=dynamic_fabric_yards]").each(function (index, element){
          element.value = yards;
        });
      } else {
        $("input[name*=dynamic_fabric_yards]").each(function (index, element){
          element.value = "";
        });
      }
    }
  });
  if ( (isNaN(parseInt(yards))) || (parseInt(yards) == 0) )
  {
    var cost = 0
  }
  else
  {
    if (size != "Test Swatch (8\" x 8\")" && size != "Swatch (8\" x 8\")") {
      var cost = parseFloat(parseFloat(price) * parseInt(yards) * 90) / 100
      var diff = (parseFloat(price) * parseInt(yards)) - cost
      discount_message.style.display = "block"
      discount_message.childNodes[0].data = '$' + diff.toFixed(2) + ' saved with designer discount.'
    } else {
      var cost = parseFloat(price) * parseInt(yards)
      discount_message.style.display = "none"
    }
  }
  //alert("childnodes 2")
  total.childNodes[0].data = 'Total: $' + cost.toFixed(2)
}

function checkQty() {
  var qty = $('#dynamic_fabric_count').val();
  console.log("the qty is " + qty)
  if (qty % 1 != 0 || isNaN(parseInt(qty)))  {
    //if not a number or whole number
    $('#qty_alert').show();
    $('#add_to_cart_button').hide();
  } else if (qty > 200) {
    $('#qty_alert-over_limit').show();
    $('#add_to_cart_button').hide();
  } else {
    $('.qty_alert').hide();
    $('#add_to_cart_button').show();
  }
}
var flexFabSize=0;

function onClickSelectRadioButton(e, yards_boolean)
{
  var total = document.getElementById("total")
  $("input[name*=swatch]").each(function (index, element) {
    element.value = '';
  });
  $("input[name*=fatq]").each(function (index, element) {
    element.value = '';
  });
  $("input[name*=yards]").each(function (index, element) {
    element.value = '';
  });

  var count_holder = document.getElementById('dynamic_fabric_count')
  count_holder.value = 1;
  if (!e.target) {
    $("input[name*=fabric_id]").each(function (index, element) {
      if (element.checked) {
        fabricId = element.value;
      }
    });
    e.srcElement.value = '1'
    size_finder = "size_" + e.srcElement.id
    size = document.getElementById(size_finder).childNodes[0].data
    yard_test = "" + e.srcElement.id
    $("input[name*=fabric_size_id]").each(function (index, element) {
      if (element.value == size) {
        element.click()
      } else if (index == 2 && yard_test == ('dynamic_fabric_yards_' + fabricId)) {
        flexFabSize = size
        element.click()
      }
    });

  } else {
    e.target.value = '1'
    flexFabSize = e.target.previousElementSibling.childNodes[0].data
    e.target.parentNode.previousElementSibling.click()
  }
  onKeyUpChangeTotal();
}
var fabricSizes = {1:[8.0,8.0],2:[21.0,18.0],3:[42.0,36.0],4:[42.0,72.0],5:[42.0,108.0],6:[42.0,144.0],7:[42.0,180.0],8:[8.0,8.0],9:[26.0,18.0],10:[52.0,36.0],11:[52.0,72.0],12:[52.0,108.0],18:[8.0,8.0],19:[28.0,18.0],20:[56.0,36.0],21:[56.0,72.0],22:[56.0,108.0],23:[52.0,144.0],24:[52.0,180.0],27:[56.0,144.0],28:[56.0,180.0],32:[8.0,8.0],33:[28.0,18.0],34:[56.0,36.0],35:[56.0,72.0],36:[56.0,108.0],37:[56.0,144.0],38:[56.0,180.0],40:[8.0,8.0],41:[26.0,18.0],42:[52.0,36.0],43:[52.0,72.0],44:[52.0,108.0],45:[52.0,144.0],46:[52.0,180.0],49:[52.0,720.0],53:[8.0,8.0],54:[29.0,18.0],55:[58.0,36.0],56:[58.0,72.0],57:[58.0,108.0],58:[58.0,144.0],59:[58.0,180.0],60:[8.0,8.0],61:[27.0,18.0],62:[8.0,8.0],63:[27.0,18.0],64:[54.0,36.0],65:[54.0,72.0],66:[54.0,108.0],67:[54.0,144.0],68:[54.0,180.0],206:[8.0,8.0],207:[26.0,18.0],208:[53.0,36.0],209:[53.0,72.0],210:[53.0,108.0],211:[53.0,144.0],212:[53.0,180.0],398:[8.0,8.0],399:[8.0,8.0],400:[8.0,8.0],401:[21.0,18.0],402:[42.0,36.0],403:[42.0,72.0],404:[42.0,108.0],405:[42.0,144.0],406:[42.0,180.0],452:[8.0,8.0],453:[8.0,8.0],454:[27.0,18.0],455:[54.0,36.0],456:[54.0,72.0],457:[54.0,108.0],458:[54.0,144.0],459:[54.0,180.0],726:[8.0,8.0],727:[20.0,18.0],728:[40.0,36.0],729:[40.0,72.0],730:[40.0,108.0],731:[40.0,144.0],732:[40.0,180.0],790:[24.0,12.0],791:[24.0,144.0],792:[5.0,5.0],793:[15.0,15.0],794:[30.0,30.0],796:[8.0,8.0],797:[21.0,18.0],798:[42.0,36.0],799:[42.0,72.0],800:[42.0,108.0],801:[42.0,144.0],802:[42.0,180.0],965:[8.0,8.0],966:[21.0,18.0],967:[42.0,36.0],968:[42.0,72.0],969:[42.0,108.0],970:[42.0,144.0],971:[42.0,180.0],1282:[8.0,8.0],1283:[21.0,18.0],1284:[42.0,36.0],1285:[42.0,72.0],1286:[42.0,108.0],1287:[42.0,144.0],1288:[42.0,180.0],1509:[26.0,72.0],1594:[8.0,8.0],1595:[21.0,18.0],1596:[42.0,36.0],1597:[42.0,72.0],1598:[42.0,108.0],1599:[42.0,144.0],1600:[42.0,180.0],1765:[26.0,72.0],1841:[8.0,8.0],1842:[28.0,18.0],1843:[56.0,36.0],1844:[56.0,72.0],1845:[56.0,108.0],1846:[56.0,144.0],1847:[56.0,180.0],1850:[8.0,8.0],1851:[25.0,18.0],1852:[50.0,36.0],1853:[50.0,72.0],1854:[50.0,108.0],1855:[50.0,144.0],1856:[50.0,180.0],1857:[8.0,8.0],1858:[27.0,18.0],1859:[54.0,36.0],1860:[54.0,72.0],1861:[54.0,108.0],1862:[54.0,144.0],1863:[54.0,180.0],1933:[4.25,5.5],1942:[8.0,8.0],1943:[28.0,18.0],1944:[56.0,36.0],1945:[56.0,72.0],1946:[56.0,108.0],1947:[56.0,144.0],1948:[56.0,180.0],1997:[8.0,8.0],1998:[21.0,18.0],1999:[42.0,36.0],2000:[42.0,72.0],2001:[42.0,108.0],2002:[42.0,144.0],2003:[42.0,180.0],2074:[8.0,8.0],2075:[27.0,18.0],2076:[54.0,36.0],2100:[8.0,8.0],2101:[21.0,18.0],2102:[42.0,36.0],2103:[42.0,72.0],2104:[42.0,108.0],2105:[42.0,144.0],2106:[42.0,180.0],2189:[8.0,8.0],2190:[28.0,18.0],2191:[56.0,36.0],2192:[56.0,72.0],2193:[56.0,108.0],2194:[56.0,144.0],2195:[56.0,180.0],2358:[8.0,8.0],2359:[27.0,18.0],2360:[54.0,36.0],2361:[54.0,72.0],2362:[54.0,108.0],2363:[54.0,144.0],2364:[54.0,180.0],2407:[8.0,8.0],2408:[28.0,18.0],2409:[56.0,36.0],2410:[56.0,72.0],2411:[56.0,108.0],2412:[56.0,144.0],2413:[56.0,180.0],2538:[8.0,8.0],2539:[54.0,36.0],2540:[54.0,72.0],2541:[54.0,108.0],2542:[54.0,144.0],2543:[54.0,180.0],2561:[8.0,8.0],2562:[54.0,36.0],2563:[54.0,72.0],2564:[54.0,108.0],2565:[54.0,144.0],2566:[54.0,180.0],2567:[27.0,18.0],2568:[27.0,18.0],2570:[8.0,8.0],2571:[28.0,18.0],2572:[56.0,36.0],2573:[56.0,72.0],2574:[56.0,108.0],2575:[56.0,144.0],2576:[56.0,180.0],2582:[8.0,8.0],2583:[28.0,18.0],2584:[56.0,36.0],2585:[56.0,72.0],2586:[56.0,108.0],2587:[56.0,144.0],2588:[56.0,180.0],2692:[24.0,12.0],2693:[24.0,144.0],2834:[8.0,8.0],2835:[52.0,36.0],2836:[52.0,72.0],2838:[52.0,108.0],2839:[52.0,144.0],2840:[52.0,180.0],2842:[8.0,8.0],2843:[54.0,36.0],2844:[54.0,72.0],2845:[54.0,108.0],2846:[54.0,144.0],2847:[54.0,180.0],2852:[26.0,18.0],2853:[27.0,18.0],2938:[8.0,8.0],2997:[8.0,8.0],2998:[54.0,36.0],2999:[54.0,72.0],3000:[54.0,108.0],3001:[54.0,144.0],3002:[54.0,180.0],3003:[27.0,18.0],3025:[8.0,8.0],3026:[21.0,18.0],3027:[42.0,36.0],3028:[42.0,72.0],3029:[42.0,108.0],3030:[42.0,144.0],3031:[42.0,180.0],3198:[8.0,8.0],3200:[29.0,18.0],3201:[58.0,36.0],3202:[58.0,72.0],3203:[58.0,108.0],3204:[58.0,144.0],3205:[58.0,180.0],3355:[8.0,8.0],3356:[27.0,18.0],3357:[54.0,36.0],3358:[54.0,72.0],3359:[54.0,108.0],3360:[54.0,144.0],3361:[54.0,180.0],3437:[8.0,8.0],3438:[28.0,18.0],3439:[56.0,36.0],3440:[56.0,72.0],3441:[56.0,108.0],3442:[56.0,144.0],3443:[56.0,180.0],3444:[56.0,180.0],3527:[8.0,8.0],3529:[21.0,18.0],3530:[42.0,36.0],3531:[42.0,72.0],3532:[42.0,108.0],3533:[42.0,144.0],3534:[42.0,180.0],3566:[8.0,8.0],3567:[56.0,36.0],3568:[28.0,18.0],3569:[56.0,72.0],3570:[56.0,108.0],3571:[56.0,144.0],3572:[56.0,180.0],3856:[28.0,18.0],3857:[56.0,36.0],3899:[8.0,8.0],3900:[8.0,8.0],3901:[8.0,8.0],3902:[28.0,18.0],3903:[56.0,36.0],3904:[56.0,72.0],3905:[56.0,108.0],3906:[56.0,144.0],3907:[56.0,180.0],4032:[8.0,8.0],4033:[21.0,18.0],4034:[42.0,36.0],4035:[42.0,72.0],4036:[42.0,108.0],4037:[42.0,144.0],4038:[42.0,180.0],4101:[8.0,8.0],4102:[27.0,18.0],4103:[54.0,36.0],4104:[54.0,72.0],4105:[54.0,108.0],4106:[54.0,144.0],4107:[54.0,180.0],4209:[8.0,8.0],4210:[29.0,18.0],4211:[58.0,36.0],4212:[58.0,72.0],4213:[58.0,108.0],4214:[58.0,144.0],4215:[58.0,180.0],4352:[8.0,8.0],4353:[30.0,18.0],4354:[60.0,36.0],4355:[60.0,72.0],4356:[60.0,108.0],4357:[60.0,144.0],4358:[60.0,180.0],4461:[8.0,8.0],4462:[28.0,18.0],4463:[56.0,36.0],4467:[56.0,72.0],4468:[56.0,108.0],4469:[56.0,144.0],4470:[56.0,180.0],4542:[26.0,72.0],4696:[8.0,8.0],4697:[21.0,18.0],4698:[42.0,36.0],4699:[42.0,72.0],4700:[42.0,108.0],4701:[42.0,144.0],4702:[42.0,180.0],4900:[8.0,8.0],4901:[21.0,18.0],4902:[42.0,36.0],4903:[42.0,72.0],4904:[42.0,108.0],4905:[42.0,144.0],4906:[42.0,180.0],5255:[24.0,12.0],5256:[24.0,144.0],5263:[8.0,8.0],5264:[29.0,18.0],5265:[58.0,36.0],5266:[8.0,8.0],5267:[58.0,72.0],5268:[58.0,108.0],5269:[58.0,144.0],5270:[58.0,180.0],5329:[24.0,12.0],5330:[24.0,144.0],5388:[8.0,8.0],5389:[30.0,18.0],5390:[60.0,36.0],5391:[60.0,72.0],5392:[60.0,108.0],5393:[60.0,144.0],5394:[60.0,180.0],5759:[8.0,8.0],5760:[24.0,12.0],5761:[24.0,324.0],6240:[56.0,36.0],6242:[56.0,72.0],6249:[56.0,144.0],6250:[54.0,36.0],6251:[56.0,180.0],6356:[60.0,36.0],6357:[60.0,72.0],6358:[60.0,108.0],6359:[60.0,144.0],6360:[60.0,180.0],6361:[30.0,18.0],6458:[8.0,8.0],6459:[30.0,18.0],6460:[60.0,36.0],6461:[60.0,72.0],6462:[60.0,108.0],6463:[60.0,144.0],6464:[60.0,180.0],6465:[8.0,8.0],6466:[29.0,18.0],6467:[58.0,36.0],6468:[58.0,72.0],6469:[58.0,108.0],6470:[58.0,144.0],6471:[58.0,180.0],6602:[56.0,324.0],6974:[56.0,72.0],7448:[56.0,108.0],7449:[56.0,216.0],7564:[56.0,324.0],7594:[56.0,288.0]};

var image = {
  width: 7.873333333333333,
  height: 7.873333333333333
};
// IN ORDER TO SPEED UP THE CANVAS BROWSE, THE PREVIEWER USES COMPOSITE REPEATS THAT ARE
// GENERATED BY IMAGEMAGICK ON THE SERVER FOR ALL IMAGES SMALLER THAN 4"
// THE SERVER GENERATES MIRROR, BRICK, DROP, AND BASIC REPEAT COMPOSITES.
// THESE COMPOSITES WILL ALWAYS BE SIZED TO 1 REPEAT GREATER THAN 8"
// THIS FORMULA CALCULATES NUMBER OF REPEATS IN THE COMPOSITE
if (image.width < 4 || image.height < 4) {
  if (image.height > image.width)
  { composite_repeats = 2*(parseInt(parseInt(1200/(image.width*150))/2)+1); }
  else
  { composite_repeats = 2*(parseInt(parseInt(1200/(image.height*150))/2)+1); }
}
else
{
  composite_repeats = 0;
}

// Eval the successful result of ajax_cart
//$(window).load(function() {
//    window.alert("init1");
//    $("#ajax_cart").bind('ajax:success', function(evt, data, status, xhr) {
//      window.alert("status: " + status);
//      window.alert("about to eval: " + data);
//      eval('(' + data + ')');
//    });
//  });
//$(document).ajaxSuccess(function(evt, xhr, settings) {
//  if (settings.url.indexOf("/designs/") != -1) {
//    window.alert("about to eval: " + xhr.responseText);
//    eval('(' + xhr.responseText + ')');
//  }
//});
  $(function () {
    var previewImage = new Image();
    var highresImage = new Image();
    var compositeMirrorImage = new Image();
    var compositeBrickImage = new Image();
    var compositeDropImage = new Image();
    var compositeCenterImage = new Image();

    $('html').click(function() {
      $('#fabric_drop_down').hide();
      $("#size_drop_down_5").hide();
      $("#size_drop_down_10").hide();
      $("#size_drop_down_13").hide();
      $("#size_drop_down_17").hide();
      $("#size_drop_down_18").hide();
      $("#size_drop_down_21").hide();
      $("#size_drop_down_23").hide();
      $("#size_drop_down_30").hide();
      $("#size_drop_down_31").hide();
      $("#size_drop_down_32").hide();
      $("#size_drop_down_33").hide();
      $("#size_drop_down_34").hide();
      $("#size_drop_down_37").hide();
      $("#size_drop_down_39").hide();
      $("#size_drop_down_43").hide();
      $("#size_drop_down_44").hide();
      $("#size_drop_down_45").hide();
      $("#size_drop_down_46").hide();
      $("#size_drop_down_47").hide();
      $("#size_drop_down_48").hide();
      $("#size_drop_down_49").hide();
      $("#size_drop_down_50").hide();
      $("#size_drop_down_51").hide();
      $("#size_drop_down_52").hide();
      $("#size_drop_down_53").hide();
      $("#size_drop_down_54").hide();
      $("#size_drop_down_55").hide();
      $("#size_drop_down_56").hide();
      $("#size_drop_down_59").hide();
      $("#size_drop_down_60").hide();
      $("#size_drop_down_61").hide();
      $("#size_drop_down_62").hide();
      $("#size_drop_down_63").hide();
      $("#size_drop_down_65").hide();
      $("#size_drop_down_66").hide();
      $("#size_drop_down_67").hide();
    });
    $('#fabric_selector').click(function(event){
      event.stopPropagation();
    });
    $('#size_selector').click(function(event){
      event.stopPropagation();
    });

    var showFabricSizes = function () {
      var fabric;
      console.log("inside show fabric")
      $("input[name*=fabric_id]").each(function (index, element) {
        if (element.checked) { fabric = element.value; }
      });
      if (fabric != 5 )
      {
        $("#fabric_5_size").hide();
      }
      else
      {
        $("#fabric_5_size").show();
      }
      if (fabric != 10 )
      {
        $("#fabric_10_size").hide();
      }
      else
      {
        $("#fabric_10_size").show();
      }
      if (fabric != 13 )
      {
        $("#fabric_13_size").hide();
      }
      else
      {
        $("#fabric_13_size").show();
      }
      if (fabric != 17 )
      {
        $("#fabric_17_size").hide();
      }
      else
      {
        $("#fabric_17_size").show();
      }
      if (fabric != 18 )
      {
        $("#fabric_18_size").hide();
      }
      else
      {
        $("#fabric_18_size").show();
      }
      if (fabric != 21 )
      {
        $("#fabric_21_size").hide();
      }
      else
      {
        $("#fabric_21_size").show();
      }
      if (fabric != 23 )
      {
        $("#fabric_23_size").hide();
      }
      else
      {
        $("#fabric_23_size").show();
      }
      if (fabric != 30 )
      {
        $("#fabric_30_size").hide();
      }
      else
      {
        $("#fabric_30_size").show();
      }
      if (fabric != 31 )
      {
        $("#fabric_31_size").hide();
      }
      else
      {
        $("#fabric_31_size").show();
      }
      if (fabric != 32 )
      {
        $("#fabric_32_size").hide();
      }
      else
      {
        $("#fabric_32_size").show();
      }
      if (fabric != 33 )
      {
        $("#fabric_33_size").hide();
      }
      else
      {
        $("#fabric_33_size").show();
      }
      if (fabric != 34 )
      {
        $("#fabric_34_size").hide();
      }
      else
      {
        $("#fabric_34_size").show();
      }
      if (fabric != 37 )
      {
        $("#fabric_37_size").hide();
      }
      else
      {
        $("#fabric_37_size").show();
      }
      if (fabric != 39 )
      {
        $("#fabric_39_size").hide();
      }
      else
      {
        $("#fabric_39_size").show();
      }
      if (fabric != 43 )
      {
        $("#fabric_43_size").hide();
      }
      else
      {
        $("#fabric_43_size").show();
      }
      if (fabric != 44 )
      {
        $("#fabric_44_size").hide();
      }
      else
      {
        $("#fabric_44_size").show();
      }
      if (fabric != 45 )
      {
        $("#fabric_45_size").hide();
      }
      else
      {
        $("#fabric_45_size").show();
      }
      if (fabric != 46 )
      {
        $("#fabric_46_size").hide();
      }
      else
      {
        $("#fabric_46_size").show();
      }
      if (fabric != 47 )
      {
        $("#fabric_47_size").hide();
      }
      else
      {
        $("#fabric_47_size").show();
      }
      if (fabric != 48 )
      {
        $("#fabric_48_size").hide();
      }
      else
      {
        $("#fabric_48_size").show();
      }
      if (fabric != 49 )
      {
        $("#fabric_49_size").hide();
      }
      else
      {
        $("#fabric_49_size").show();
      }
      if (fabric != 50 )
      {
        $("#fabric_50_size").hide();
      }
      else
      {
        $("#fabric_50_size").show();
      }
      if (fabric != 51 )
      {
        $("#fabric_51_size").hide();
      }
      else
      {
        $("#fabric_51_size").show();
      }
      if (fabric != 52 )
      {
        $("#fabric_52_size").hide();
      }
      else
      {
        $("#fabric_52_size").show();
      }
      if (fabric != 53 )
      {
        $("#fabric_53_size").hide();
      }
      else
      {
        $("#fabric_53_size").show();
      }
      if (fabric != 54 )
      {
        $("#fabric_54_size").hide();
      }
      else
      {
        $("#fabric_54_size").show();
      }
      if (fabric != 55 )
      {
        $("#fabric_55_size").hide();
      }
      else
      {
        $("#fabric_55_size").show();
      }
      if (fabric != 56 )
      {
        $("#fabric_56_size").hide();
      }
      else
      {
        $("#fabric_56_size").show();
      }
      if (fabric != 59 )
      {
        $("#fabric_59_size").hide();
      }
      else
      {
        $("#fabric_59_size").show();
      }
      if (fabric != 60 )
      {
        $("#fabric_60_size").hide();
      }
      else
      {
        $("#fabric_60_size").show();
      }
      if (fabric != 61 )
      {
        $("#fabric_61_size").hide();
      }
      else
      {
        $("#fabric_61_size").show();
      }
      if (fabric != 62 )
      {
        $("#fabric_62_size").hide();
      }
      else
      {
        $("#fabric_62_size").show();
      }
      if (fabric != 63 )
      {
        $("#fabric_63_size").hide();
      }
      else
      {
        $("#fabric_63_size").show();
      }
      if (fabric != 65 )
      {
        $("#fabric_65_size").hide();
      }
      else
      {
        $("#fabric_65_size").show();
      }
      if (fabric != 66 )
      {
        $("#fabric_66_size").hide();
      }
      else
      {
        $("#fabric_66_size").show();
      }
      if (fabric != 67 )
      {
        $("#fabric_67_size").hide();
      }
      else
      {
        $("#fabric_67_size").show();
      }
    };

    var onYardChange = function () {
      $("input[name*=fabric_size_id]").each(function (index, element) {
        if (element.checked) {
          if (element.value == '0'){
            makePreview();
          }
        }
      });
    };

    var makeFabricSizes = function () {
      var fabric;
      console.log("Inside makeFabricSizes");
      $("input[name*=fabric_id]").each(function (index, element) {
        if (element.checked) { fabric = element.value; }
      });
      if (fabric != 66 )
      {
        console.log("hidden_" + "ac");
        $("#fabric_66_size").hide();
      }
      else
      {
        console.log("showing " + "ac");
        console.log("#fabric_66_size");
        $("#fabric_66_size").show();
        var element_clicked = false;
        $("#fabric_66_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("6458 = " + element.value)
          if (6458 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 65 )
      {
        console.log("hidden_" + "aw");
        $("#fabric_65_size").hide();
      }
      else
      {
        console.log("showing " + "aw");
        console.log("#fabric_65_size");
        $("#fabric_65_size").show();
        var element_clicked = false;
        $("#fabric_65_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("5759 = " + element.value)
          if (5759 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 63 )
      {
        console.log("hidden_" + "aj");
        $("#fabric_63_size").hide();
      }
      else
      {
        console.log("showing " + "aj");
        console.log("#fabric_63_size");
        $("#fabric_63_size").show();
        var element_clicked = false;
        $("#fabric_63_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("5388 = " + element.value)
          if (5388 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 30 )
      {
        console.log("hidden_" + "bu");
        $("#fabric_30_size").hide();
      }
      else
      {
        console.log("showing " + "bu");
        console.log("#fabric_30_size");
        $("#fabric_30_size").show();
        var element_clicked = false;
        $("#fabric_30_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2100 = " + element.value)
          if (2100 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 17 )
      {
        console.log("hidden_" + "cc");
        $("#fabric_17_size").hide();
      }
      else
      {
        console.log("showing " + "cc");
        console.log("#fabric_17_size");
        $("#fabric_17_size").show();
        var element_clicked = false;
        $("#fabric_17_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("1282 = " + element.value)
          if (1282 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 43 )
      {
        console.log("hidden_" + "st");
        $("#fabric_43_size").hide();
      }
      else
      {
        console.log("showing " + "st");
        console.log("#fabric_43_size");
        $("#fabric_43_size").show();
        var element_clicked = false;
        $("#fabric_43_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2997 = " + element.value)
          if (2997 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 51 )
      {
        console.log("hidden_" + "cu");
        $("#fabric_51_size").hide();
      }
      else
      {
        console.log("showing " + "cu");
        console.log("#fabric_51_size");
        $("#fabric_51_size").show();
        var element_clicked = false;
        $("#fabric_51_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("4032 = " + element.value)
          if (4032 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 44 )
      {
        console.log("hidden_" + "kc");
        $("#fabric_44_size").hide();
      }
      else
      {
        console.log("showing " + "kc");
        console.log("#fabric_44_size");
        $("#fabric_44_size").show();
        var element_clicked = false;
        $("#fabric_44_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("3025 = " + element.value)
          if (3025 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 59 )
      {
        console.log("hidden_" + "pu");
        $("#fabric_59_size").hide();
      }
      else
      {
        console.log("showing " + "pu");
        console.log("#fabric_59_size");
        $("#fabric_59_size").show();
        var element_clicked = false;
        $("#fabric_59_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("4900 = " + element.value)
          if (4900 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 33 )
      {
        console.log("hidden_" + "pp");
        $("#fabric_33_size").hide();
      }
      else
      {
        console.log("showing " + "pp");
        console.log("#fabric_33_size");
        $("#fabric_33_size").show();
        var element_clicked = false;
        $("#fabric_33_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2407 = " + element.value)
          if (2407 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 39 )
      {
        console.log("hidden_" + "pc");
        $("#fabric_39_size").hide();
      }
      else
      {
        console.log("showing " + "pc");
        console.log("#fabric_39_size");
        $("#fabric_39_size").show();
        var element_clicked = false;
        $("#fabric_39_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2834 = " + element.value)
          if (2834 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 47 )
      {
        console.log("hidden_" + "cl");
        $("#fabric_47_size").hide();
      }
      else
      {
        console.log("showing " + "cl");
        console.log("#fabric_47_size");
        $("#fabric_47_size").show();
        var element_clicked = false;
        $("#fabric_47_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("3527 = " + element.value)
          if (3527 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 23 )
      {
        console.log("hidden_" + "df");
        $("#fabric_23_size").hide();
      }
      else
      {
        console.log("showing " + "df");
        console.log("#fabric_23_size");
        $("#fabric_23_size").show();
        var element_clicked = false;
        $("#fabric_23_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("1857 = " + element.value)
          if (1857 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 21 )
      {
        console.log("hidden_" + "pk");
        $("#fabric_21_size").hide();
      }
      else
      {
        console.log("showing " + "pk");
        console.log("#fabric_21_size");
        $("#fabric_21_size").show();
        var element_clicked = false;
        $("#fabric_21_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("1841 = " + element.value)
          if (1841 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 67 )
      {
        console.log("hidden_" + "lt");
        $("#fabric_67_size").hide();
      }
      else
      {
        console.log("showing " + "lt");
        console.log("#fabric_67_size");
        $("#fabric_67_size").show();
        var element_clicked = false;
        $("#fabric_67_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("6465 = " + element.value)
          if (6465 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 31 )
      {
        console.log("hidden_" + "mj");
        $("#fabric_31_size").hide();
      }
      else
      {
        console.log("showing " + "mj");
        console.log("#fabric_31_size");
        $("#fabric_31_size").show();
        var element_clicked = false;
        $("#fabric_31_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2189 = " + element.value)
          if (2189 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 55 )
      {
        console.log("hidden_" + "cj");
        $("#fabric_55_size").hide();
      }
      else
      {
        console.log("showing " + "cj");
        console.log("#fabric_55_size");
        $("#fabric_55_size").show();
        var element_clicked = false;
        $("#fabric_55_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("4352 = " + element.value)
          if (4352 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 56 )
      {
        console.log("hidden_" + "fl");
        $("#fabric_56_size").hide();
      }
      else
      {
        console.log("showing " + "fl");
        console.log("#fabric_56_size");
        $("#fabric_56_size").show();
        var element_clicked = false;
        $("#fabric_56_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("4461 = " + element.value)
          if (4461 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 52 )
      {
        console.log("hidden_" + "lp");
        $("#fabric_52_size").hide();
      }
      else
      {
        console.log("showing " + "lp");
        console.log("#fabric_52_size");
        $("#fabric_52_size").show();
        var element_clicked = false;
        $("#fabric_52_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("4101 = " + element.value)
          if (4101 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 49 )
      {
        console.log("hidden_" + "ku");
        $("#fabric_49_size").hide();
      }
      else
      {
        console.log("showing " + "ku");
        console.log("#fabric_49_size");
        $("#fabric_49_size").show();
        var element_clicked = false;
        $("#fabric_49_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("3566 = " + element.value)
          if (3566 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 48 )
      {
        console.log("hidden_" + "su");
        $("#fabric_48_size").hide();
      }
      else
      {
        console.log("showing " + "su");
        console.log("#fabric_48_size");
        $("#fabric_48_size").show();
        var element_clicked = false;
        $("#fabric_48_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("3437 = " + element.value)
          if (3437 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 46 )
      {
        console.log("hidden_" + "mk");
        $("#fabric_46_size").hide();
      }
      else
      {
        console.log("showing " + "mk");
        console.log("#fabric_46_size");
        $("#fabric_46_size").show();
        var element_clicked = false;
        $("#fabric_46_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("3355 = " + element.value)
          if (3355 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 37 )
      {
        console.log("hidden_" + "kp");
        $("#fabric_37_size").hide();
      }
      else
      {
        console.log("showing " + "kp");
        console.log("#fabric_37_size");
        $("#fabric_37_size").show();
        var element_clicked = false;
        $("#fabric_37_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2582 = " + element.value)
          if (2582 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 5 )
      {
        console.log("hidden_" + "ok");
        $("#fabric_5_size").hide();
      }
      else
      {
        console.log("showing " + "ok");
        console.log("#fabric_5_size");
        $("#fabric_5_size").show();
        var element_clicked = false;
        $("#fabric_5_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("32 = " + element.value)
          if (32 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 60 )
      {
        console.log("hidden_" + "tu");
        $("#fabric_60_size").hide();
      }
      else
      {
        console.log("showing " + "tu");
        console.log("#fabric_60_size");
        $("#fabric_60_size").show();
        var element_clicked = false;
        $("#fabric_60_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("5263 = " + element.value)
          if (5263 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 53 )
      {
        console.log("hidden_" + "tz");
        $("#fabric_53_size").hide();
      }
      else
      {
        console.log("showing " + "tz");
        console.log("#fabric_53_size");
        $("#fabric_53_size").show();
        var element_clicked = false;
        $("#fabric_53_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("4209 = " + element.value)
          if (4209 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 50 )
      {
        console.log("hidden_" + "sl");
        $("#fabric_50_size").hide();
      }
      else
      {
        console.log("showing " + "sl");
        console.log("#fabric_50_size");
        $("#fabric_50_size").show();
        var element_clicked = false;
        $("#fabric_50_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("3901 = " + element.value)
          if (3901 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 45 )
      {
        console.log("hidden_" + "tp");
        $("#fabric_45_size").hide();
      }
      else
      {
        console.log("showing " + "tp");
        console.log("#fabric_45_size");
        $("#fabric_45_size").show();
        var element_clicked = false;
        $("#fabric_45_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("5266 = " + element.value)
          if (5266 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 34 )
      {
        console.log("hidden_" + "ec");
        $("#fabric_34_size").hide();
      }
      else
      {
        console.log("showing " + "ec");
        console.log("#fabric_34_size");
        $("#fabric_34_size").show();
        var element_clicked = false;
        $("#fabric_34_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2538 = " + element.value)
          if (2538 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 32 )
      {
        console.log("hidden_" + "fs");
        $("#fabric_32_size").hide();
      }
      else
      {
        console.log("showing " + "fs");
        console.log("#fabric_32_size");
        $("#fabric_32_size").show();
        var element_clicked = false;
        $("#fabric_32_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("2358 = " + element.value)
          if (2358 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      if (fabric != 10 )
      {
        console.log("hidden_" + "sk");
        $("#fabric_10_size").hide();
      }
      else
      {
        console.log("showing " + "sk");
        console.log("#fabric_10_size");
        $("#fabric_10_size").show();
        var element_clicked = false;
        $("#fabric_10_size input").each(function (index, element) {
          console.log("inside size loop");
          console.log("inside the unless statement")
          console.log("400 = " + element.value)
          if (400 == element.value) {
            console.log("the element is " + element);
            element_clicked = true
            element.click();
          }
          if (!element_clicked && element.value == 0) {
            element.click();
          }
        });
      }
      makePreview();
    };
    var makePreview = function ()
    {
      var fabricSizeId;
      var fabricSizeIndex;
      var fabricId;
      var fabricIndex;
      var repeat;
      var user_dpi;
      $("input[name*=fabric_id]").each(function (index, element) {
        if (element.checked) {
          fabricId = element.value;
          console.log("Fabric_id: " + fabricId)
          fabric_info = "fabric_name_" + fabricId
          document.getElementById('fabric_selected').innerHTML = document.getElementById(fabric_info).childNodes[0].data
        }
      });
      $("input[name*=fabric_size_id]").each(function (index, element) {
        if (element.checked) {
          fabricSizeId = element.value;
          console.log("fabric_size_" + fabricSizeId + "_" + fabricId)
          size_info = "fabric_size_" + fabricSizeId + "_" + fabricId
          size_select = 'size_selected_' + fabricId
          document.getElementById(size_select).innerHTML = document.getElementById(size_info).childNodes[0].data
        }
      });
      $("#fabric_item_repeat_type > option").each(function (index, element) {
        if (element.selected) {
          repeat = element.value;
          repeat_element_HTML = element.innerHTML;
          $(".repeat_select").each(function (index, element){
            type = element.name;
            if (type == repeat_element_HTML) {
              element.firstChild.src = '/assets/repeatButtons/'+type+'_HOVER.png';
              document.getElementById('des_rep').innerHTML = type;
            }
          });
          console.log("repeat: " + repeat)
        }
      });
      $("input[name*=dpi]").each(function (index, element) {
        if (element.checked) { user_dpi = element.value;}
      });
      console.log("FABRIC: " + fabricId + " FABRIC_SIZE: " + fabricSizeId + " REPEAT: " + repeat + " DPI: " + user_dpi);

      // document.getElementById('boldStuff').innerHTML = 'Fred Flinstone';
      // The arguments to drawPreview:
      // previewImage is a file (currently created by imagescience, 400px on the long dimension
      // and ? whatever preserves the aspect ratio on the other dimension)
      // the next 4 arguments are the width and height of the fabric in inches,
      // and the width and height of the provided design image in inches.
      // The final argument is an integer (0-4) indicating which repeat option was chosen.

      // The user has the option of setting a dpi other than 150.  Our image width and height are set in inches
      // assuming 150 dpi.  If the user chooses something different, we need to create a conversion factor
      // to create a new width and height for the rendered image in fabric inches.
      var h_conversion = (150/user_dpi);
      var w_conversion =  (150/user_dpi);

      // To see the values of these arguments, uncomment one of the following lines:

      // var alertmessage = "fabric width " + fabricSizes[fabricSizeId].width + " inches, fabric height " +
      //             fabricSizes[fabricSizeId].height + " inches, image width " +
      //             w_conversion * image.width + " inches, image height " +
      //             h_conversion * image.height + " inches, repeat is " + repeat +
      //             " and user_dpi is " + user_dpi

      // var alertmessage = "image width " +
      //             image.width + " inches, image height " +
      //             image.height + " inches"
      //        alert(alertmessage);


      // fabricSizeId is set to 0 when the user has chosen a flex fabric size
      // When this is true, we must set flexFabSize as the size.  This is the 5 yard
      // size for whichever fabric the user has chosen.  flexFabSize is set by
      // an onclick event handler which calls onClickSet5yards, a function at the
      // top of this file.  We must also display the user message at the bottom of
      // the canvas element that explains 5 yards is displayed for all flex sizes
      fabricHeight = 0;
      if (typeof(fabricSizeId) == "undefined")
      {
        console.log("Fabric Size undefined, setting to first item");
        fabricSizeId = 0;
      }

      if (fabricSizeId == 0)
      {
        var yards = document.getElementById('dynamic_fabric_count').value;
        // checks to see if a flexfabsize is set, if not sets to 1YD, if yards is blank sets to 1YD without click, else sets
        // to what the flexsize is
        dynamic_fabric_yards_element = document.getElementById("dynamic_fabric_yards_" + fabricId);
        if (dynamic_fabric_yards_element != null) {
          if (flexFabSize == 0 ){

            dynamic_fabric_yards_element.click();
            fabricSizeId = document.getElementById("size_dynamic_fabric_yards_" + fabricId).childNodes[0].data;
          } else if (yards == "") {

            fabricSizeId = document.getElementById("size_dynamic_fabric_yards_" + fabricId).childNodes[0].data
            fabricHeight = fabricSizes[fabricSizeId][1]
          } else {
            console.log("Fabric Size is set as Flex Size");
            fabricSizeId = flexFabSize;
          }

        }
        // checks the height of the length, if no yards is blank sets to 1YD, if yards less than 6 varies, and greater is set to 5
        if (yards == "") {
          fabricHeight = fabricSizes[fabricSizeId][1]
        } else if (yards < 6 ) {
          fabricHeight = fabricSizes[fabricSizeId][1] * yards
        } else {
          fabricHeight = fabricSizes[fabricSizeId][1] * 5
        }
      }
      else
      {
        fabricHeight = fabricSizes[fabricSizeId][1]
      }
      makeRepeatCounts(fabricSizes[fabricSizeId][0], fabricHeight,
        w_conversion * image.width, h_conversion * image.height);

      // COMPOSITE IMAGES ARE CREATED SERVER SIDE IN DESIGN.RB: MAKE_THUMBNAILS

      if (image.width < 4 || image.height < 4) {
        if (repeat == 4) {
          compositeImage=compositeMirrorImage;
        }
        if (repeat == 3) {
          compositeImage=compositeBrickImage;
        }
        if (repeat == 2) {
          compositeImage=compositeDropImage;
        }
        if (repeat == 1) {
          compositeImage=previewImage;
        }
        if (repeat == 0) {
          compositeImage=compositeCenterImage;
        }

      }
      else {
        compositeImage=previewImage;
        composite_repeats = 0;
      }
      WaterMark = 0;
      drawPreview(previewImage, highresImage, compositeImage,
        fabricSizes[fabricSizeId][0],
        fabricHeight,
        w_conversion * image.width,
        h_conversion * image.height,
        repeat, composite_repeats, user_dpi, WaterMark);
      fixH('one','two','three');
    };
    // this onload function is what triggers the display to the user
    // we need to trigger it off the design image that has been loaded
    // or the user will get a blank design page
    previewImage.onload = function ()
    {


      $("input[name*=repeat]").bind('click', makePreview);
      $("input[name*=dpi]").bind('click', makePreview);
      $("input[name*=fabric_size_id]").bind('click', makePreview);
      $("input[name*=fabric_id]").bind('click', makeFabricSizes);
      $("#fabric_item_repeat_type").change(makePreview);
      $(".repeat_select").click(makePreview);

      $("#dynamic_fabric_count").bind('keyup', onYardChange);

      document.getElementById('fabric_options').style.display = "inline";
      if ((image.width > 10 ) || (image.height > 10))
      {highresImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_highres.png';}
      else
      {highresImage=previewImage;}
      $("#fabric_item_repeat_type > option").each(function (index, element) {
        if (1 == element.value) {
          element.selected = true;
        }
      });
      $("input[name*=fabric_size_id]").each(function (index, element) {
        if (2101 == element.value) {
          element.click();
          $("input[name*=fabric_id]").each(function (index, element) {

            if (30 == element.value){
              element.checked = true;
            }
          });
        } else {
          $("input[name*=fabric_id]").each(function (index, element) {

            if (30 == element.value){
              element.checked = true;
            }
          });
        }
      });
      try {
        showFabricSizes();
        makePreview();
        fixH('one','two','three');
      } catch (e) {
        console.log("Exception: " + e.name);
        console.log("Message: " + e.message);
      }

      if ((image.width < 4 ) || (image.height < 4))
      {
        compositeMirrorImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_mirror_preview.png';
        compositeBrickImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_brick_preview.png';
        compositeDropImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_drop_preview.png';
        compositeCenterImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_preview.png';
      }
      document.getElementById('loading').style.display = "none";
      document.getElementById('design_preview').style.display = "inline";
    }

    $("input[name*=dpi]").each(function (index, element) {
      if (index == 0)
      {
        element.value=150;
        element.click();
      }
    });

    highresImage.onload = function ()
    {
      makePreview();
      document.getElementById('loading').style.display = "none";
      document.getElementById('design_preview').style.display = "inline";
    }



    if ((image.width < 4 ) || (image.height < 4))
    {
      console.log("preview Image is less than 4")
      previewImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_repeat_preview.png';


    }
    else if ((image.width > 72 ) || (image.height > 72))

    {
      console.log("preview Image > than 72")
      highresImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_highres.png';
      previewImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_mirror.png';
    }
    else
    {
      console.log("4 < preview Image < 72")
      previewImage.src = 'http://s3.amazonaws.com/spoonflower/public/design_thumbnails/0608/7566/papu-2-150_mirror.png';
    }
  });
