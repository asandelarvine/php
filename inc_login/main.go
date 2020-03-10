package main

import ("fmt"
		"time"
) 

func main() {
	go count(5)
	go count(6)
	go count(7)
	time.Sleep(time.Second * 5)
}
func count(thing int){
	for i := 1; true; i++{
		fmt.Println(i, thing)
		time.Sleep(time.Millisecond * 500)
	}
}

// 	fmt.Println("Hello, 世界")
// }
