# intelliVest
intelliVest is a website that tracks spending and recommends stocks based P/E ratios.

All of the necessary files are not included so contact me if you want the full project's soruce code.

For this project I used php, html, mySQL, and a bit of javascript to create a website that makes tracking expenses and stocks easy.

# Technical Details
The login system for this website uses REGEX for authentication and a mySQL database hosted on phpAdmin to store a user's details. 
Upon logging in, the user is met by tge homescreen that uses a Boot Strap HTML5 as a framework. There is a simple navbar at the top from which 
you can navigate to the finance tracker and the stock recomendations. When the user scrolls down, they encounter some additional information about each tab
and a couple buttons that link to their respective pages. 

![image](https://user-images.githubusercontent.com/59908789/117748162-5ef8c480-b1c4-11eb-8e19-38433da572c1.png)
![image](https://user-images.githubusercontent.com/59908789/117748455-e9412880-b1c4-11eb-862d-c6f23ce307f5.png)
![image](https://user-images.githubusercontent.com/59908789/117748511-fc53f880-b1c4-11eb-94d7-96c6567829c9.png)
![image](https://user-images.githubusercontent.com/59908789/117748533-05dd6080-b1c5-11eb-8649-d61525feeb10.png)


The finance tracker uses uses javascript ring animations to monitor how much one has spent in a single day, a week, a month, and even the year's expenses. These expenses are added 
using by clicking the "add expense" button on the side bar. These expenses are added to the mySQL database and is linked to the specific user that is logged in. 

![image](https://user-images.githubusercontent.com/59908789/117748598-286f7980-b1c5-11eb-9706-d39d56a88fc8.png)
![image](https://user-images.githubusercontent.com/59908789/117748622-3a511c80-b1c5-11eb-935c-0b54dea49998.png)
![image](https://user-images.githubusercontent.com/59908789/117748663-4dfc8300-b1c5-11eb-9457-7653fd64bd0f.png)

