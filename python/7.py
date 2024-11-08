#Program to traverse a string in python
my_string ="google"
pos =  int(input("Enter the position of the character to print: "))

if 0 <= len(my_string):
    print(f" The character at the specific string:",{my_string[pos]})
else:
    print("Invalid position")
