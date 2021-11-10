    const firstScrooler=document.querySelector('.liDiv3Index');
    console.log(firstScrooler);
    window.addEventListener('scroll',()=>
    {
        const{scrollTop, clientHeight}=document.documentElement;
        console.log(scrollTop, clientHeight);
        const haut= firstScrooler.getBoundingClientRect().top;

    console.log(haut);

    if(scrollTop > (scrollTop + haut).toFixed() - clientHeight * 0.8)
    {
        console.log('dépassé')
        div=document.getElementById("div3Index");
        console.log(div);
        div.style.opacity="1";
        div.style.marginLeft ="0%";
    }
    });