#include <iostream>
#include <vector>
#include <algorithm>

int max_subarray_sum(const std::vector<int>& arr) {
    if (arr.empty()) {
        return 0; 
    }

    int current_sum = arr[0];
    int max_sum = arr[0];     

    for (size_t i = 1; i < arr.size(); ++i) {
        current_sum = std::max(arr[i], current_sum + arr[i]); 
        max_sum = std::max(max_sum, current_sum); 
    }

    return max_sum;
}

int main() {
    int n;
    std::cout << "Enter the number of elements in the array: ";
    std::cin >> n;

    if (n <= 0) {
        std::cout << "Array size must be greater than 0." << std::endl;
        return 1;
    }

    std::vector<int> arr(n);
    std::cout << "Enter the elements of the array: ";

    for (int i = 0; i < n; ++i) {
        std::cin >> arr[i];
    }

    int result = max_subarray_sum(arr);
    std::cout << "Maximum subarray sum is: " << result << std::endl;

    return 0;
}
