function CheckAge(age) {
    if(age < 18) {
        confirm('you are too young');
    }else if(age > 35) {
        confirm(' you are too old');
    }else{
        let name1 =  prompt('whate your name?');
        alert('welcome ' + name1 + ' in the party.');
    }
}


    do {
        CheckAge(prompt('whate the age about you ?'));
    } while (confirm("is there anyone else?"));