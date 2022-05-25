document.onreadystatechange = () => {
	if(document.readyState === "complete")
	{
        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
                // show navbar
                nav.classList.toggle('show');
                // change icon
                toggle.classList.toggle('bx-x');
                // add padding to body
                bodypd.classList.toggle('body-pd');
                // add padding to header
                headerpd.classList.toggle('body-pd');
                });
            }
        }

        showNavbar('header-toggle','nav-bar','body-pd','header');

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link');

        function colorLink(){
            if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'));
                this.classList.add('active');
            }
            
            var links = document.querySelectorAll('.nav_link');
            var cont1 = document.getElementById("container1");
            var cont2 = document.getElementById("container2");
            var cont3 = document.getElementById("container3");
            for(var i = 0; i < links.length; i++)
            {

                if(links[i].classList.contains("active") && i == 0)
                {
                    cont1.style.display = "block";
                    cont2.style.display = "none";
                    cont3.style.display = "none";
                    continue;
                }

                if(links[i].classList.contains("active") && i == 1)
                {
                    cont1.style.display = "none";
                    cont2.style.display = "block";
                    cont3.style.display = "none";
                    continue;
                }

                if(links[i].classList.contains("active") && i == 2)
                {
                    cont1.style.display = "none";
                    cont2.style.display = "none";
                    cont3.style.display = "block";
                }
            }
        }
        
        linkColor.forEach(l => l.addEventListener('click', colorLink));

        // Your code to run since DOM is loaded and ready

        function changeTab()
        {
            for(var i = 0; i < 12; i += 4)
            {
                var tab1 = document.getElementById('tab' + (i + 1));
                var tab2 = document.getElementById('tab' + (i + 2));
                var tab3 = document.getElementById('tab' + (i + 3));
                var tab4 = document.getElementById('tab' + (i + 4));
                var c1 = document.getElementById('c' + (i + 1));
                var c2 = document.getElementById('c' + (i + 2));
                var c3 = document.getElementById('c' + (i + 3));
                var c4 = document.getElementById('c' + (i + 4));
                if(tab1 && tab2 && tab3 && tab4 && c1 && c2 && c3 && c4)
                {
                    if(tab1.checked)
                    {
                        c1.style.display = "block";
                        c2.style.display = "none";
                        c3.style.display = "none";
                        c4.style.display = "none";
                        continue;
                    }

                    if(tab2.checked)
                    {
                        c1.style.display = "none";
                        c2.style.display = "block";
                        c3.style.display = "none";
                        c4.style.display = "none";
                        continue;
                    }

                    if(tab3.checked)
                    {
                        c1.style.display = "none";
                        c2.style.display = "none";
                        c3.style.display = "block";
                        c4.style.display = "none";
                        continue;
                    }

                    if(tab4.checked)
                    {
                        c1.style.display = "none";
                        c2.style.display = "none";
                        c3.style.display = "none";
                        c4.style.display = "block";
                        continue;
                    }
                }
            }
        }

        const tabs = document.querySelectorAll("[id^=tab]");

        tabs.forEach(t => t.addEventListener('click', changeTab));
    }
}