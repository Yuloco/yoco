  function item(ifClick) {
      var w = document.getElementById("container1");
      if (w.Value != undefined) {
          var e = document.getElementById(w.Value);
          e.style.display = 'none';
      }
      var v = document.getElementById(ifClick);
      v.style.display = 'block';
      w.Value = document.getElementById(ifClick).getAttribute("id");
  }