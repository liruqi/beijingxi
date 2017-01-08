<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BJW Parking Garage System</title>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.min.css">
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="header clearfix">
      <nav>
        <ul class="nav nav-pills pull-right">
          <li role="presentation">
            <a href="index.html">Home</a>
          </li>
          <li role="presentation">
            <a href="aboutus.html">About us</a>
          </li>
        </ul>
      </nav>
      <h3 class="text-muted">
        <img alt="Beijing West Parking Lot" src="HeadLogo.png" />
        Beijing West Parking Lot
      </h3>
    </div>

    <form action="api.php?a=reserve" method="post" class="form">
      <h3>
        Start Reservation
      </h3>
      <div class="alert alert-success">
        There are <span class="highlight">123</span> parking spot left.
        <a class="cmore">See empty spots!&rarr;</a>
      </div>
      <div class="form-group">
        <label for="carnum">Your Car No.</label>
        <div class="inline">
          <select class="car_reg" name="car_reg">
            <option>京</option>
            <option>沪</option>
            <option>津</option>
            <option>渝</option>
            <option>冀</option>
            <option>豫</option>
            <option>云</option>
            <option>辽</option>
            <option>黑</option>
            <option>湘</option>
            <option>皖</option>
            <option>鲁</option>
            <option>新</option>
            <option>苏</option>
            <option>浙</option>
            <option>赣</option>
            <option>鄂</option>
            <option>桂</option>
            <option>甘</option>
            <option>晋</option>
            <option>蒙</option>
            <option>陕</option>
            <option>吉</option>
            <option>闽</option>
            <option>贵</option>
            <option>粤</option>
            <option>川</option>
            <option>青</option>
            <option>藏</option>
            <option>琼</option>
            <option>宁</option>
          </select>
          <input type="text" class="form-control" id="carnum" name="car_id" placeholder="Car NO." maxlength="6">
        </div>
      </div>
      <div class="form-group">
        <label for="timepicker">Reservation Start Time</label>
        <input id="timepicker" name="time" size="16" type="text" value="" readonly class="form-control">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <div class="form spots" >
      <h3>Spots in Microsoft Beijing West Parking Center</h3>
      <table class="lots">
        <tr>
          <!-- line 1 -->
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="swpath"></td>
          <td class="lot occu"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot occu"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
        </tr>
        <tr>
          <!-- line 2 -->
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="wpath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="swpath"></td>
          <td class="lot"></td>
        </tr>
        <tr>
          <!-- line 3 -->
          <td class="lot occu"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot occu"></td>
          <td class="lot occu"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
        </tr>
        <tr>
          <!-- line 3-2 -->
          <td class="lot occu"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot occu"></td>
          <td class="lot occu"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
        </tr>
        <tr>
          <!-- line 4 -->
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="cpath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="npath"></td>
          <td class="wepath"></td>
          <td class="wepath"></td>
          <td class="npath"></td>
          <td class="wepath"></td>
          <td class="spath"></td>
          <td class="swpath"></td>
        </tr>
        <tr>
          <!-- line 5 -->
          <td class="lot"></td>
          <td class="lot occu"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot occu"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
        </tr>
        <tr>
          <!-- line 6-->
          <td class="lot occu"></td>
          <td class="lot occu"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
          <td class="lot"></td>
          <td class="lot"></td>
          <td class="snpath"></td>
        </tr>
      </table>
    </div>

  </div>
  <script type="text/javascript">
  $('#timepicker').datetimepicker({
    format: "dd MM yyyy - hh:ii",
    autoclose: true,
    todayBtn: true
  });

  $('.cmore').click(function(){
    $(".spots").toggle();
  });

  </script>
</body>

</html>
