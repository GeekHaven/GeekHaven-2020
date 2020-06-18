const toggleButton  = document.getElementsByClassName('toggle-button')[0]
const navLinks = document.getElementsByClassName('nav-a')

for(let i=0; i<=3; i++)
{
    toggleButton.addEventListener('click', () => {
        navLinks[i].classList.toggle('active')
    })
}


