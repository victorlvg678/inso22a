document.onreadystatechange = () => {
	if(document.readyState === "complete")
	{
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');
		const prevPage = document.getElementById('prevPage');
		const nextPage = document.getElementById('nextPage');
		const page1 = document.getElementById('page1');
		const page2 = document.getElementById('page2');
		const country = document.getElementById('country');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});

		prevPage.addEventListener('click', () => {
			if(page1 == null || page2 == null)
			{
				return;
			}

			page1.classList.toggle("hidden");
			page2.classList.toggle("hidden");
			prevPage.classList.toggle("hidden");
			nextPage.classList.toggle("hidden");
		});

		nextPage.addEventListener('click', () => {
			if(page1 == null || page2 == null)
			{
				return;
			}

			page1.classList.toggle("hidden");
			page2.classList.toggle("hidden");
			prevPage.classList.toggle("hidden");
			nextPage.classList.toggle("hidden");
		});
		
		country.addEventListener('change', () => {
			var flag = document.getElementById('Flag');
			if(flag)
			{
				for(var i = 0; i < flag.classList.length; i++)
				{
					flag.classList.remove(flag.classList[i]);
				}
				flag.classList.add("input-icon");
				flag.classList.add("fi");
				flag.classList.add("fi-" + country.options[country.selectedIndex].value);
			}
		});


	}
}

