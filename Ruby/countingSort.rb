#Counting Sort Algorithm Using Ruby

def countingSort(array)
    max_val = array.max

    count = Array.new(max_val + 1, 0);

    array.each do |num|
        count[num] += 1
    end

    sorted = []
    count.each_with_index do |count_value, i|
        count_value.times { sorted << i }
    end

    sorted
end

my_array = [4, 2, 2, 6, 3, 3, 1, 6, 5, 2, 3];
sorted_array = countingSort(my_array)
puts "The sorted array is: #{sorted_array}"