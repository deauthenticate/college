# Write a Python program to demonstrate Conditional returns

def check_even_odd(number):
    if number % 2 == 0:
        return "Even"
    else:
        return "Odd"
result = check_even_odd(4)
print(result)
