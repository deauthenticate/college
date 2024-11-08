def calculate_discount(bill_amt):
    sum_digits = 0
    temp_amt = bill_amt
    
    while temp_amt > 0:
        digit = temp_amt % 10
        sum_digits += digit
        temp_amt //= 10

    if (bill_amt >= 10000):
        discount_percentage = sum_digits
    else:
        discount_percentage = sum_digits / 2
        
    discount_amount = (bill_amt * discount_percentage) / 100
    final_bill = bill_amt - discount_amount

    return discount_percentage, discount_amount, final_bill

bill_amt = int(input('Enter your total bill amount: '))
discount_percentage, discount_amount, final_bill = calculate_discount(bill_amt)
print(f"Original Bill Amount: {bill_amt}")
print(f"Discount Percentage: {discount_percentage}%")
print(f"Discount Amount: {discount_amount}")
print(f"Final Bill Amount: {final_bill}")

