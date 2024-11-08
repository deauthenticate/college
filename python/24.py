def is_a_perfect_number(n):
    if n < 2:
        return False
    
    divisors_sum = 1
    for i in range(2, int(n**0.5) + 1):
        if n % i == 0:
            divisors_sum += i
            if i != n // i:
                divisors_sum += n // i
    
    return divisors_sum == n

number = int(input("Enter a number: "))
if is_a_perfect_number(number):
    print(f"{number} is a perfect number.")
else: 
    print(f"{number} is not a perfect number.")
