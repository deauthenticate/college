# Assigning the same list object to both a and b
a = b = [1, 2, 3]

# Assigning a new list object with the same content to c
c = [1, 2, 3]

# Printing the memory addresses (IDs) of the objects
print("id(a):", id(a), "id(b):", id(b), "id(c):", id(c))

# Checking if a and b are the same object
print(a is b)  # Output: True

# Checking if a and c are the same object
print(a is c)  # Output: False

# Printing the content of the lists
print("a:", a, "b:", b, "c:", c)

