/**
 * Created by Fede on 16/09/2017.
 */
//FORM

document.querySelector("#sendMail").addEventListener("click", function () {
    const name = document.querySelector('#name').value;
    const lastname = document.querySelector('#lastname').value;
    const email = document.querySelector('#email').value;
    const message = document.querySelector('#message').value;
    let statusEl = document.querySelector('#status');

    if (name.length == 0 || lastname.length == 0 || email.length == 0 || message.length == 0)
    {
        statusEl.innerText = "You must fill all the fields!";
        return;
    }

    document.querySelector("#sendMail").disabled= true;

    const mailData = {
        name: name,
        lastname: lastname,
        email: email,
        message: message,
    };

    let xhr = new XMLHttpRequest();

    xhr.onload = function(){
        if(xhr.status === 200){

            statusEl.innerText= "Thank you for your message!";
        }
        else{
            statusEl.innerText = "Error";
        }

    }

    xhr.open('POST', 'api.php?action=mail', true);
    xhr.send(JSON.stringify(mailData));
});

