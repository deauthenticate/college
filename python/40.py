# write a program to demonstrate various string methods 
text = " Hello, World! "
lowercase_text = text.lower()      
uppercase_text = text.upper()     
title_text = text.title()         

stripped_text = text.strip()       

words = stripped_text.split(",")  
joined_text = "-".join(words)      

replaced_text = stripped_text.replace("World", "Python")  
index = stripped_text.find("World")   # 7
count = stripped_text.count("o")      # 2

print("Lowercase Text:", lowercase_text)
print("Uppercase Text:", uppercase_text)
print("Title Text:", title_text)
print("Stripped Text:", stripped_text)
print("Words:", words)
print("Joined Text:", joined_text)
print("Replaced Text:", replaced_text)
print("Index of 'World':", index)
print("Count of 'o':", count)

