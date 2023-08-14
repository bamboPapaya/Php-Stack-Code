class Stack {
    private $stack;

    public function __construct() {
        $this->stack = [];
    }

    public function push($item) {
        array_push($this->stack, $item);
    }

    public function pop() {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        }
        return null;
    }

    public function top() {
        return end($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function clear() {
        $this->stack = [];
    }

    public function display() {
        foreach ($this->stack as $item) {
            echo $item . " ";
        }
        echo "\n";
    }
}

// Demonstration
$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);

$stack->display();    // Output: 1 2 3

echo "Top element: " . $stack->top() . "\n";    // Output: 3

$stack->pop();
$stack->display();    // Output: 1 2

echo "Is the stack empty? " . ($stack->isEmpty() ? "Yes" : "No") . "\n";    // Output: No

$stack->clear();
echo "Is the stack empty? " . ($stack->isEmpty() ? "Yes" : "No") . "\n";    // Output: Yes
