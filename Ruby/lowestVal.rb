# Data Structures and Algorithm using Ruby

# Find the lowest value form the array

def lowestVal(array)
    lowest = array[0]
    array.each do |num|
        if num < lowest
            lowest = num
        end    
    end    
    lowest
end    

puts "The lowest value from the array is: #{lowestVal([7, 12, 9, 4, 11])}"


# Find the highest value form the array

def highestVal(array)
    highest = array[0]

    array.each do |num|
        if num > highest
            highest = num
        end    
    end    
    highest
end 

puts "The highest value from the array is: #{highestVal([5, 12, 7, 50, 81, 30, 66])}"