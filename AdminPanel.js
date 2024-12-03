function toggleForm(formId) {

    document.querySelectorAll('.form-section').forEach(function(section) {
      section.style.display = 'none';
    });

  
    const selectedForm = document.getElementById(formId);
    if (selectedForm.style.display === 'none') {
      selectedForm.style.display = 'block';
    } else {
      selectedForm.style.display = 'none';
    }
  }


  // const authenticateUser = () => {
  //   const username = prompt("Enter your username:");
  //   const password = prompt("Enter your password:");

    
  //   const validUsername = "Palash";
  //   const validPassword = "Palash12345";

  //   if (username === validUsername && password === validPassword) {
  //     alert("Access granted!");
  //   } else {
  //     alert("Access denied! You are not authorized.");
      
  //     window.location.href = "AdminPanel.html";
  //   }
  // };


  // window.onload = authenticateUser;