# Redding-2.0-Final-Presentation
final version for submission of the project 

Many find it challenging to keep track of all the food they buy and the portion they consume.
Around 88 million tonnes of food waste are generated annually in the EU. This equals 174 kg per person or 143 billion euros or 170 000 000 tonnes of CO2. 
According to the European Commission website

Redding’s primary goals are to help its users to save money and to prevent food waste.  
Sustainability is a subject that grows more important as time goes by, and here at Redding, we aspire to help individuals live a more sustainable life easily, without even thinking about it.   


****Functional Requirement****

        The system has three main functionality types. Each of them creates a ‘mini sub-system’ of some sort. Each subsystem is a component of the app’s navigation bar.
Each of the elements has a set of requirements, some overlap in responsibilities.
The vision is that both users and analysts use the same app however the analysts are authorized to see and do more.  

**Personal Inventory:**
        This component’s general purpose is to let the user add and remove items from the inventory while displaying current items in the refrigerator and their expiration date.
**End - users**
The user can update items in the inventory. Both add and remove [m]
When an item is deleted the user needs to choose if it was used or thrown out[m]
The user can send a request to add an item to the database[m]
Items in the Personal Inventory should have a photo, a name and an expiration date[m]
Every thrown out item is saved for the statistics (will be explained in the Intelligent Shopping Hub)[m]
The user can change default expiration date if they wish[m]
The user can see the inventory and its item’s expiration dates [m] 
The user can sort items by expiration dates or categories [s]
The user can update the current amount of each item[m]
The user can update how much items cost them[m]
The user can update an item that was bought for a reduced  price[m]

**Analysts**
There should be a database of existing items reviewed and monitored by analysts[m]
Items in the database have a name, price range, category*, photo, sale update[m]
When an item is added to the inventory it is saved in user history[m]
Each item has a default expiration date [m]
Analysts review price drops and approve them if logical[m]

**Recipes Feed:** 
        The main purpose of this component is to show users recipes they can make right now with their inventory holds and allow the user to look for a specific recipe by ingredient.
End-Users
The user can only submit a new recipe for review by the analysts [s]
The user can search a recipe by ingredient [m]
The user can rate  and recommend published recipes [m]
Users get a notification when their recipe was published[s]
The feed should display recipes the user has the ingredients to make first [c]
Analysts
Only the analysts can publish recipes [m]
The list of recipes displays a picture, name of the recipe and the main ingredients and the rating[m] 
Every recipe is made of : recipe name, ingredient list, equipment necessary and directions [m]
Only analysts can view unpublished recipes[m]


**Intelligent Shopping Hub:**

This component’s general purpose is to manage all the data and turn it into helpful information for the user. All notifications can be canceled if the user does not want to receive them.
End-Users
Users can create a shopping list
The shopping list’s total price is calculated and displayed to the user
The user needs to receive a notification when items on the shopping history go on sale[c]
The user needs to receive a notification when there are less than five items in the inventory
The user should get a notification to remind them to update inventory after two days without any changes
The user needs to receive a summary of food they had to throw out before going shopping[s]
The user should be able to see how much food the app helped save since the beginning of use[s]
The user should be able to see the total price of their shopping list in different shopping chains[s]
Search of items is by the items name or category 
When the user searches an item the price range should be displayed 
user can add a reminder for shopping time 
user can control how many times a day to get notifications 
 The user should be able to see the statistics the app has collected ( How much food was wasted and saved, which items were consumed first, what items usually get thrown out[m] 
Analysts
Analysts publish information about sales and price drops entered by the users or found online
