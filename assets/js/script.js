window.onload = function() {
    // check if file is index.html
    var path = window.location.pathname;
    if (path == '/index.html' || path == '/' || path == '' || path == '/project/POLIJE/sigesit/') {
      const splashScreen = document.querySelector('.splash-screen');
  
      // Simulate loading time
      setTimeout(() => {
        // splashScreen.style.display = 'none';
        // redirect to the game
        window.location.href = 'main-menu.html';
        // Load main content or redirect to the game
      }, 3000); // Replace 3000 with desired loading time in milliseconds
    }
  };
  
  // main menu script
  // onclick button open attr link
  function openLink(link) {
    window.location.href = link;
  }
  // open back
  function openBack() {
    window.history.back();
  }
  // make function multiplayer and alert input count player
  function multiplayer() {
    const countPlayer = prompt('Enter the number of players');
    if (countPlayer) {
      // set max player
      if (countPlayer > 4) {
        alert('Maximum 4 players');
      } else {
        // redirect to the game
        alert(`You have entered ${countPlayer} players`);
        openLink('game.html');
      }
    }
  }

  // add loading every open page
  window.addEventListener('load', () => {
    // append element
    const loading = document.createElement('div');
    loading.classList.add('loading');
    loading.innerHTML = '<img src="assets/img/logo.png" alt="loading" style="width:150px">Loading...';
    document.body.appendChild(loading);
    // remove element after 3s
    setTimeout(() => {
      loading.remove();
    }, 500);

  }); 