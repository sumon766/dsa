#Data Structure and Algorithm Practice Using Ruby

#Quick Sort Algorithm Using Ruby

def partition(array, low, high)
    pivot = array[high];
    i = low - 1;

    (low...high).each do |j|
        if array[j] <= pivot
            i += 1
            array[i], array[j] = array[j], array[i]
        end    
    end    

    array[i + 1], array[high] = array[high], array[i + 1]
    i + 1
end

def quickSort(array, low = 0, high = nil)
    if high.nil?
        high = array.length - 1
    end

    if low < high
        pivotIndex = partition(array, low, high)
        quickSort(array, low, pivotIndex - 1)
        quickSort(array, pivotIndex + 1, high)
    end
end    

array = [64, 34, 25, 12, 22, 11, 90, 5]
quickSort(array)

puts "The sorted array is: #{array}"